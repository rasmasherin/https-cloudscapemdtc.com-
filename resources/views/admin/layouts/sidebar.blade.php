<!-- Sidebar -->
<div style="
    width:240px;
    position:fixed;
    top:0;
    left:0;
    background: #8875B4;
    height:100vh;
    padding:20px;
    box-sizing:border-box;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    overflow-y:auto;
    z-index:1000;
    border-right:1px solid #000000;
">

    <!-- Logo Section -->
    <div style="
        text-align:center;
        margin-bottom:20px;
        padding-bottom:12px;
        border-bottom:1px solid rgba(255,255,255,0.2);
    ">
        <img src="{{ asset('img/cloudlogo.png') }}" alt="Clinic Logo" style="
            width:80px;
            height:80px;
            margin:0 auto -4px;
            display:block;
            object-fit:contain;
        ">
        <h2 style="
            color: #ffffff;
            font-weight:600;
            font-size:18px;
            letter-spacing:0.5px;
            margin:0;
        ">CLOUDSCAPE</h2>
        <p style="
            color: #ffffff;
            font-size:12px;
            font-weight:500;
            margin-top:4px;
        ">multidisciplinary therapy centre</p>
    </div>

    <!-- Menu -->
    <ul style="list-style:none; padding:0; margin:0;">
        <!-- Dashboard -->
        <li>
            <a href="{{ route('admin.dashboard') }}" class="menu-link">
                <svg width="20" height="20" fill="currentColor" style="margin-right:12px;" viewBox="0 0 24 24">
                    <path d="M3 13h8V3H3v10zm0 8h8v-6H3v6zm10 0h8v-10h-8v10zm0-18v6h8V3h-8z"/>
                </svg>
                Dashboard
            </a>
        </li>

        <!-- Services -->
        <li>
            <a href="{{ route('admin.services.index') }}" class="menu-link">
                <svg width="20" height="20" fill="currentColor" style="margin-right:12px;" viewBox="0 0 24 24">
                    <path d="M12 2l4 4h-3v7h-2V6H8l4-4zm6 8v10H6V10h12z"/>
                </svg>
                Services
            </a>
        </li>

        <!-- Careers -->
        <li>
            <a href="{{ route('admin.careers.index') }}" class="menu-link">
                <svg width="20" height="20" fill="currentColor" style="margin-right:12px;" viewBox="0 0 24 24">
                    <path d="M16 2H8a2 2 0 00-2 2v16h12V4a2 2 0 00-2-2zM9 4h6v2H9V4zm0 4h6v2H9V8z"/>
                </svg>
                Careers
            </a>
        </li>

        <!-- Career Applications -->
        <li>
            <a href="{{ route('admin.career_applications.index') }}" class="menu-link">
                <svg width="20" height="20" fill="currentColor" style="margin-right:12px;" viewBox="0 0 24 24">
                    <path d="M4 4h16v2H4V4zm0 4h16v14H4V8zm2 2v10h12V10H6z"/>
                </svg>
                Career Applications
            </a>
        </li>

        <!-- Consultations -->
        <li>
            <a href="{{ route('admin.consultations.index') }}" class="menu-link">
                <svg width="20" height="20" fill="currentColor" style="margin-right:12px;" viewBox="0 0 24 24">
                    <path d="M2 6l10 6 10-6v12a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"/>
                </svg>
                Consultation
            </a>
        </li>

        <!-- Gallery -->
        <li>
            <a href="{{ route('admin.gallery.index') }}" class="menu-link">
                <svg width="20" height="20" fill="currentColor" style="margin-right:12px;" viewBox="0 0 24 24">
                    <path d="M4 4h16v16H4V4zm2 2v12h12V6H6zm3 3h6v6H9V9z"/>
                </svg>
                Gallery
            </a>
        </li>

        <!-- Contact Messages -->
        <li>
            <a href="{{ route('admin.contact_messages.index') }}" class="menu-link">
                <svg width="20" height="20" fill="currentColor" style="margin-right:12px;" viewBox="0 0 24 24">
                    <path d="M4 4h16v12H4V4zm0 14h16v2H4v-2zm2-2v-2h12v2H6z"/>
                </svg>
                Contact Messages
            </a>
        </li>

        <!-- Blogs -->
        <li>
            <a href="{{ route('admin.blogs.index') }}" class="menu-link">
                <svg width="20" height="20" fill="currentColor" style="margin-right:12px;" viewBox="0 0 24 24">
                    <path d="M4 4h16v16H4V4zm2 2v12h12V6H6zm2 2h8v2H8V8zm0 4h8v2H8v-2z"/>
                </svg>
                Blogs
            </a>
        </li>

        <!-- Appointments -->
        <li>
            <a href="{{ route('admin.appointments.index') }}" class="menu-link">
                <svg width="20" height="20" fill="currentColor" style="margin-right:12px;" viewBox="0 0 24 24">
                    <path d="M12 2a7 7 0 100 14 7 7 0 000-14zm0 2a5 5 0 110 10 5 5 0 010-10zm0 11c-4 0-8 2-8 4v1h16v-1c0-2-4-4-8-4z"/>
                </svg>
                Appointments
            </a>
        </li>

        <!-- Logout -->
        <li style="margin-top:12px;">
            <!-- <form method="POST" action="{{ route('admin.logout') }}">
                @csrf
                <button style="
                    width:100%;
                    padding:10px;
                    border:none;
                    background:#3F355D;
                    color:#F1EDF8;
                    border-radius:8px;
                    font-weight:500;
                    cursor:pointer;
                    transition:0.3s;
                " onmouseover="this.style.background='#2E2545'" onmouseout="this.style.background='#3F355D'">
                    Logout
                </button>
            </form> -->
        </li>
    </ul>
</div>

<!-- Content spacing -->
<div style="margin-left:240px;"></div>

<!-- Styles -->
<style>
.menu-link {
    display:flex;
    align-items:center;
    padding:10px 14px;
    color: #ffffff;
    text-decoration:none;
    border-radius:8px;
    font-size:14px;
    font-weight:500;
    transition:0.3s;
}

.menu-link:hover {
    background: #403954;
}

.menu-link svg {
    color: #e3dcdc;
}
</style>
