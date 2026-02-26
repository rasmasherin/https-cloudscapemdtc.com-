<div style="
    width:calc(100% - 240px);
    margin-left:240px;
    height:70px;
    background:#8875B4;
    display:flex;
    align-items:center;
    justify-content:space-between;
    padding:0 30px;
    box-sizing:border-box;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    border-bottom:1px solid #35333375;
    position:sticky;
    top:0;
    z-index:999;
">
    <!-- Left - Page Title -->
    <div style="
        font-size:20px;
        font-weight:600;
        color: #ffffff;
        letter-spacing:-0.5px;
    ">
        <!-- Page Title -->
    </div>

    <!-- Right - User Info & Logout -->
    <div style="display:flex; align-items:center; gap:20px;">
        
        <!-- User Info -->
        <div style="display:flex; align-items:center; gap:12px;">
            <div style="
                width:40px;
                height:40px;
                background:linear-gradient(135deg, #7961AB 0%, #764ba2 100%);
                border-radius:50%;
                display:flex;
                align-items:center;
                justify-content:center;
                color:#FFFFFF;
                font-weight:600;
                font-size:16px;
            ">
                {{ strtoupper(substr(auth()->guard('admin')->user()->name, 0, 1)) }}
            </div>

            <div style="display:flex; flex-direction:column;">
                <span style="
                    font-size:14px;
                    font-weight:600;
                    color:#111827;
                    line-height:1.2;
                ">
                    {{ auth()->guard('admin')->user()->name }}
                </span>
                <span style="
                    font-size:12px;
                    color: #ffffff;
                    line-height:1.2;
                ">
                    Administrator
                </span>
            </div>
        </div>

        <!-- Logout Button -->
        <form method="POST" action="{{ route('admin.logout') }}">
            @csrf
            <button
                type="submit"
                style="
                    background:#4A3F6B;
                    color:#FFFFFF;
                    border:none;
                    padding:8px 16px;
                    border-radius:8px;
                    cursor:pointer;
                    font-weight:500;
                    font-size:14px;
                    transition:all 0.2s ease;
                    display:flex;
                    align-items:center;
                    gap:6px;
                "
                onmouseover="this.style.background='#3F355D'"
                onmouseout="this.style.background='#4A3F6B'"
            >
                <svg style="width:16px; height:16px;" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                        clip-rule="evenodd">
                    </path>
                </svg>
                Logout
            </button>
        </form>

    </div>
</div>
