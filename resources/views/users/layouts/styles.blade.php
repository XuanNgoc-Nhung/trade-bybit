<style>
    body {
        background-color: #0b0e11;
        color: #fff;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        margin: 0;
        padding: 0;
    }
    .header {
        background-color: #0b0e11;
        border-bottom: 1px solid rgba(43, 47, 54, 0.3);
        padding: 8px 0;
        position: fixed;
        width: 100%;
        top: 0;
        z-index: 1000;
        height: 56px;
    }
    .header-container {
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 24px;
        height: 100%;
        max-width: 1800px;
        margin: 0 auto;
    }
    .logo {
        height: 28px;
        margin-right: 40px;
    }
    .nav-menu {
        display: flex;
        align-items: center;
        gap: 8px;
        list-style: none;
        margin: 0;
        padding: 0;
        height: 100%;
    }
    .nav-menu li a {
        color: #fff;
        text-decoration: none;
        font-size: 14px;
        font-weight: 500;
        padding: 6px 12px;
        border-radius: 6px;
        transition: all 0.2s;
        display: flex;
        align-items: center;
        height: 32px;
    }
    .nav-menu li a:hover {
        background-color: rgba(43, 47, 54, 0.5);
    }
    .nav-menu .dropdown {
        position: relative;
        display: inline-block;
    }
    .nav-menu .dropdown > a::after {
        content: '';
        margin-left: 4px;
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23fff'%3E%3Cpath d='M7 10l5 5 5-5z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
        opacity: 0.6;
    }
    .header-right {
        display: flex;
        align-items: center;
        gap: 16px;
    }
    .search-box {
        background: rgba(43, 47, 54, 0.5);
        border-radius: 8px;
        padding: 6px 12px;
        display: flex;
        align-items: center;
        height: 32px;
        min-width: 140px;
    }
    .search-box i {
        color: #6f767e;
        margin-right: 8px;
        font-size: 14px;
    }
    .search-box .trending-symbol {
        color: #6f767e;
        font-size: 13px;
        display: flex;
        align-items: center;
    }
    .search-box .trending-symbol .fire-icon {
        color: #f7a600;
        margin-right: 4px;
    }
    .btn-login {
        color: #fff;
        text-decoration: none;
        padding: 6px 16px;
        border-radius: 8px;
        transition: all 0.2s;
        font-size: 14px;
        font-weight: 500;
    }
    .btn-login:hover {
        background-color: rgba(43, 47, 54, 0.5);
        color: #fff;
    }
    .btn-signup {
        background-color: #f0b90b;
        color: #000;
        padding: 6px 16px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: 600;
        font-size: 14px;
        transition: all 0.2s;
    }
    .btn-signup:hover {
        background-color: #dcaa0a;
        color: #000;
    }
    .header-icon {
        color: #fff;
        cursor: pointer;
        width: 32px;
        height: 32px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 6px;
        transition: all 0.2s;
    }
    .header-icon:hover {
        background-color: rgba(43, 47, 54, 0.5);
    }
    .header-icon i {
        font-size: 18px;
        opacity: 0.85;
    }
    main {
        margin-top: 56px;
        min-height: calc(100vh - 56px);
    }
</style> 