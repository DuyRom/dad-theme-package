 <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="../../../html/ltr/vertical-menu-template-dark/index.html">
                   <!--  <div class="brand-logo"></div> -->
                    <h2 class="brand-text mb-0">Quoc Tien App</h2>
                </a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i class="feather icon-x d-block d-xl-none font-medium-4 primary toggle-icon"></i><i class="toggle-icon feather icon-disc font-medium-4 d-none d-xl-block collapse-toggle-icon primary" data-ticon="icon-disc"></i></a></li>
        </ul>
    </div>
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
            <x-mnucontent name="Dashboard2" icon="icon-home">
                <x-slot name="menuListItem">
                    <x-mnucontentlst link="#" label="Analytics" icon="icon-circle"></x-mnucontentlst>
                    <x-mnucontentlst link="#" label="eCommerce" icon="icon-circle"></x-mnucontentlst>
                </x-slot>
            </x-mnucontent>
            <x-nvnheader name="APP"></x-nvnheader>
            <x-nav-item icon="icon-mail" label="Emails" link="#"></x-nav-item>
            <x-nvnheader name="UI-UX"></x-nvnheader>
            <x-mnucontent name="User" icon="icon-user">
                <x-slot name="menuListItem">
                    <x-mnucontentlst class="menu-content-list" link="/" label="List1" icon="icon-circle"></x-mnucontentlst>
                </x-slot>
            </x-mnucontent>
            <x-mnucontent name="User 2 - 3" icon="icon-user">
                <x-slot name="menuListItem">
                    <x-mnucontentlst class="menu-content-list" link="/" label="List2" icon="icon-circle"></x-mnucontentlst>
                    <x-mnucontentlst class="menu-content-list" link="/" label="List3" icon="icon-circle"></x-mnucontentlst>
                </x-slot>
            </x-mnucontent>
        </ul>
    </div>
</div>