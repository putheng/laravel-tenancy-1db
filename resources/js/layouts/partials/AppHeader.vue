<template>
  <header class="app-header app-header-dark">
  <div class="top-bar">
    <div class="top-bar-brand">
      <router-link to="/" class="mgauto">
          <img src="https://mobilityfinance.finflux.io/images/top_nav_logo.png" alt="" style="height: 32px;width: auto;">
        </router-link>
    </div>
    <div class="top-bar-list">
      <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
        <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu">
        <span class="hamburger-box">
        <span class="hamburger-inner"></span>
        </span>
        </button>
      </div>
      
      <global-search/>

      <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
        <ul class="header-nav nav">
          <!-- .nav-item -->
          <li class="nav-item dropdown header-nav-dropdown has-notified">
            <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="oi oi-pulse"></span>
            </a>
            <div class="dropdown-arrow"></div>
            <dropdown-notifications/>
          </li>
          <!-- /.nav-item -->
          <!-- .nav-item -->
          <li class="nav-item dropdown header-nav-dropdown has-notified">
            <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="oi oi-envelope-open"></span>
            </a>
            <div class="dropdown-arrow"></div>
            <dropdown-messages/>
          </li>
          <!-- /.nav-item -->
          <!-- .nav-item -->
          <li class="nav-item dropdown header-nav-dropdown">
            <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="oi oi-grid-three-up"></span>
            </a>
            <div class="dropdown-arrow"></div>
            <dropdown-sheets/>
          </li>
          <!-- /.nav-item -->
        </ul>
        <div class="dropdown">
          <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="user-avatar user-avatar-md">
          <img src="/images/profile.jpg" alt="">
          </span>
          <span class="account-summary pr-lg-4 d-none d-lg-block">
          <span class="account-name">Beni Arisandi</span>
          <span class="account-description">Marketing Manager</span>
          </span>
          </button>
          <div class="dropdown-arrow dropdown-arrow-left"></div>
          <div class="dropdown-menu">
            <h6 class="dropdown-header d-none d-md-block d-lg-none">Beni Arisandi</h6>
            <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a>
            <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Help Center</a>
            <a class="dropdown-item" href="#">Ask Forum</a>
            <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>
</template>

<script>
  import GlobalSearch from './ui/GlobalSearch'
  import DropdownSheets from './ui/DropdownSheets'
  import DropdownMessages from './ui/DropdownMessages'
  import DropdownNotifications from './ui/DropdownNotifications'
  
  export default {
    components: {
      GlobalSearch,
      DropdownSheets,
      DropdownMessages,
      DropdownNotifications
    }
  }
</script>