<template>
<div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
  <div class="dropdown-sheets">
    <div class="dropdown-sheet-item">
      <router-link class="tile-wrapper" :to="{name:'note-home'}">
        <span class="tile tile-lg bg-indigo">
          <i class="fas fas fa-book"></i>
        </span>
        <span class="tile-peek">Notes</span>
      </router-link>
    </div>
    <div class="dropdown-sheet-item">
      <router-link class="tile-wrapper" :to="{name:'calendar-home'}">
        <span class="tile tile-lg bg-teal">
          <i class="fas fa-calendar-alt"></i>
        </span>
        <span class="tile-peek">Calendar</span>
      </router-link>
    </div>
    <div class="dropdown-sheet-item">
      <router-link class="tile-wrapper" :to="{name:'board-index' }">
        <span class="tile tile-lg bg-pink">
          <i class="fa fa-tasks"></i>
        </span>
        <span class="tile-peek">Boards</span>
      </router-link>
    </div>
    <div class="dropdown-sheet-item">
      <router-link class="tile-wrapper" :to="{name:'feed-home'}">
        <span class="tile tile-lg bg-yellow">
          <i class="fas fa-address-card"></i>
        </span>
        <span class="tile-peek">Feeds</span>
      </router-link>
    </div>
    <div class="dropdown-sheet-item">
      <router-link class="tile-wrapper" :to="{name:'file-index'}">
        <span class="tile tile-lg bg-cyan">
          <i class="oi oi-document"></i>
        </span>
        <span class="tile-peek">Files</span>
      </router-link>
    </div>
  </div>
</div>
</template>

<script>
  export default {

  }
</script>