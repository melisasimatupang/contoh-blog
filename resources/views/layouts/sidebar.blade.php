<div class="nk-sidebar">           
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Dashboard</li>
            <li>
                <a class="has-arrow" href="{{ route('home') }}" aria-expanded="false">
                    <i class="icon-speedometer menu-icon"></i><span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="blank.html" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Post</span></a>
                <ul aria-expanded="false">
                    <li><a href=" {{route('post.index')}} ">List Post</a></li>
                    <li><a href=" {{route('post.tampil_hapus')}} ">List Post yang dihapus</a></li>
                </ul>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="blank.html" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Category</span></a>
                <ul aria-expanded="false">
                    <li><a href=" {{route('category.index')}} ">List Category</a></li>
                </ul>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="blank.html" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">Tags</span></a>
                <ul aria-expanded="false">
                    <li><a href=" {{route('tags.index')}} ">List Tags</a></li>
                </ul>
            </li>
            <li class="mega-menu mega-menu-sm">
                <a class="has-arrow" href="blank.html" aria-expanded="false">
                    <i class="icon-globe-alt menu-icon"></i><span class="nav-text">User</span></a>
                <ul aria-expanded="false">
                    <li><a href=" {{route('user.index')}} ">List User</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>