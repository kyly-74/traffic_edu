document.addEventListener('DOMContentLoaded', () => {
    const authLink = document.querySelector('.auth-link');
    const userAccount = document.querySelector('.user-account.data-logged-in');
    const closeSidebarButtons = document.querySelectorAll('.close-sidebar');
    const overlay = document.getElementById('overlay');
    const logoutForm = document.getElementById('logoutForm');

    if (authLink) authLink.addEventListener('click', (e) => { e.preventDefault(); toggleSidebar('authSidebar'); });
    if (userAccount) userAccount.addEventListener('click', (e) => { e.preventDefault(); toggleSidebar('logoutSidebar'); });
    closeSidebarButtons.forEach(button => button.addEventListener('click', hideAllSidebars));
    if (overlay) overlay.addEventListener('click', hideAllSidebars);
    if (logoutForm) logoutForm.addEventListener('submit', async (e) => {
        e.preventDefault();
        try {
            const response = await fetch('logout.php', { method: 'POST', body: new FormData(logoutForm) });
            const result = await response.json();
            showToast(result.message, 'success');
            setTimeout(() => window.location.href = result.redirect || 'index.php', 1000);
        } catch {
            showToast('Lỗi đăng xuất', 'error');
        }
    });
});

function toggleSidebar(sidebarId) {
    const sidebar = document.getElementById(sidebarId);
    const overlay = document.getElementById('overlay');
    if (sidebar && overlay) {
        sidebar.classList.toggle('active');
        overlay.classList.toggle('active');
    }
}

function hideAllSidebars() {
    document.querySelectorAll('.auth-sidebar, .logout-sidebar').forEach(sidebar => sidebar.classList.remove('active'));
    const overlay = document.getElementById('overlay');
    if (overlay) overlay.classList.remove('active');
    const userInfo = document.getElementById('userInfo');
    const changePasswordSection = document.getElementById('changePasswordSection');
    if (userInfo) {
        userInfo.classList.remove('show');
        userInfo.innerHTML = '';
    }
    if (changePasswordSection) {
        changePasswordSection.classList.remove('show');
        const form = changePasswordSection.querySelector('form');
        if (form) form.reset();
    }
}

function toggleUserInfo() {
    const userInfo = document.getElementById('userInfo');
    const changePasswordSection = document.getElementById('changePasswordSection');
    if (userInfo) {
        if (userInfo.classList.contains('show')) {
            userInfo.classList.remove('show');
            userInfo.innerHTML = '';
        } else {
            if (changePasswordSection) {
                changePasswordSection.classList.remove('show');
                const form = changePasswordSection.querySelector('form');
                if (form) form.reset();
            }
            userInfo.classList.add('show');
            const csrfToken = document.querySelector('input[name="csrf_token"]').value;
            fetch('get_user_info.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/json' },
                body: JSON.stringify({ action: 'get_user_info', csrf_token: csrfToken })
            })
                .then(response => response.json())
                .then(data => {
                    userInfo.innerHTML = data.name && data.email
                        ? `<p><strong>Tên:</strong> ${data.name}</p><p><strong>Email:</strong> ${data.email}</p>`
                        : '<p>Không thể tải thông tin</p>';
                })
                .catch(() => {
                    userInfo.innerHTML = '<p>Lỗi tải thông tin</p>';
                    showToast('Lỗi tải thông tin người dùng', 'error');
                });
        }
    }
}

function toggleChangePassword() {
    const changePasswordSection = document.getElementById('changePasswordSection');
    const userInfo = document.getElementById('userInfo');
    if (changePasswordSection) {
        if (changePasswordSection.classList.contains('show')) {
            changePasswordSection.classList.remove('show');
            const form = changePasswordSection.querySelector('form');
            if (form) form.reset();
        } else {
            if (userInfo) {
                userInfo.classList.remove('show');
                userInfo.innerHTML = '';
            }
            changePasswordSection.classList.remove('hidden');
            changePasswordSection.classList.add('show');
        }
    }
}

function switchTab(formId) {
    document.querySelectorAll('.tab-button').forEach(tab => tab.classList.remove('active'));
    document.querySelectorAll('.auth-form').forEach(form => form.classList.remove('active'));
    document.querySelector(`.tab-button[onclick*="${formId}"]`).classList.add('active');
    document.getElementById(formId).classList.add('active');
}

function showToast(message, type = 'success') {
    const toastContainer = document.getElementById('toastContainer');
    if (toastContainer) {
        const toast = document.createElement('div');
        toast.className = `toast ${type}`;
        toast.textContent = message;
        toastContainer.appendChild(toast);
        setTimeout(() => toast.remove(), 3000);
    }
}

async function handleLogin(e) {
    e.preventDefault();
    const form = e.target;
    const email = form.querySelector('#loginEmail').value;
    const password = form.querySelector('#loginPassword').value;

    if (!email || !password) {
        showToast('Thiếu thông tin', 'error');
        return;
    }

    try {
        const response = await fetch('auth.php', { method: 'POST', body: new FormData(form) });
        const result = await response.json();
        if (result.message.includes('thành công')) {
            showToast(result.message, 'success');
            if (result.is_admin) {
                showToast('Chào mừng Admin!', 'success');
                setTimeout(() => window.location.href = result.redirect || 'admin/dashboard.php', 1000);
            } else {
                setTimeout(() => window.location.href = result.redirect || 'index.php', 1000);
            }
        } else {
            showToast(result.message, 'error');
            if (result.errorField !== 'general') form.querySelector(`#${result.errorField}`).classList.add('error');
        }
    } catch {
        showToast('Lỗi server', 'error');
    }
}

async function handleRegister(e) {
    e.preventDefault();
    const form = e.target;
    const name = form.querySelector('#registerName').value;
    const email = form.querySelector('#registerEmail').value;
    const password = form.querySelector('#registerPassword').value;
    const confirmPassword = form.querySelector('#confirmPassword').value;

    if (!name || !email || !password || !confirmPassword) {
        showToast('Thiếu thông tin', 'error');
        return;
    }

    if (password !== confirmPassword) {
        showToast('Mật khẩu không khớp', 'error');
        return;
    }

    try {
        const response = await fetch('auth.php', { method: 'POST', body: new FormData(form) });
        const result = await response.json();
        if (result.message.includes('thành công')) {
            showToast(result.message, 'success');
            form.reset();
            switchTab('loginForm');
        } else {
            showToast(result.message, 'error');
        }
    } catch {
        showToast('Lỗi server', 'error');
    }
}

async function handleChangePassword(e) {
    e.preventDefault();
    const form = e.target;
    const currentPassword = form.querySelector('#currentPassword').value;
    const newPassword = form.querySelector('#newPassword').value;
    const confirmNewPassword = document.querySelector('#confirmNewPassword').value;

    if (!currentPassword || !newPassword || !confirmNewPassword) {
        showToast('Thiếu thông tin', 'error');
        return;
    }

    if (newPassword !== confirmNewPassword) {
        showToast('Mật khẩu mới không khớp', 'error');
        return;
    }

    try {
        const response = await fetch('change_password.php', { method: 'POST', body: new FormData(form) });
        const result = await response.json();
        showToast(result.message, result.message.includes('thành công') ? 'success' : 'error');
        if (result.message.includes('thành công')) {
            form.reset();
            setTimeout(() => hideAllSidebars(), 1000);
        }
    } catch {
        showToast('Lỗi server', 'error');
    }
}