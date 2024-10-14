function confirmLogout() {
    if (confirm("本当にログアウトしますか？")) {
        window.location.href = "index.php?action=logout";
    }
}

function redirectToUserPage() {
    window.location.href = "index.html";
}
