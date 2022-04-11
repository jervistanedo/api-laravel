<template>
  <div>
    <div>
      <b-navbar toggleable="lg" type="dark" variant="dark">
        <div>
        </div>
        <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>
        <b-navbar-brand href="#">UPLB</b-navbar-brand>
      </b-navbar>
    </div>
    <div>
    </div>
    <div class="position-absolute bg-dark h-100">

      <nav class="navbar navbar-dark bg-dark h-100">
        <ul class="navbar-nav p-2 m-2">
          <li class="nav-item">
            <nuxt-link to="/" class="nav-link">Dashboard</nuxt-link>
          </li>
          <li class="nav-item">
            <nuxt-link to="#" class="nav-link">Future Proof UPLB</nuxt-link>
          </li>
          <li class="nav-item">
            <nuxt-link to="#" class="nav-link">Student Portal</nuxt-link>
          </li>
          <li class="nav-item">
            <nuxt-link to="#" class="nav-link">Program</nuxt-link>
          </li>
          <li class="nav-item">
            <nuxt-link to="#" class="nav-link">Mentee</nuxt-link>
          </li>
          <li class="nav-item">
            <nuxt-link to="courseWork" class="nav-link">Course Work</nuxt-link>
          </li>
        </ul>
      </nav>
    </div>
    <Nuxt />
  </div>
</template>
<script>
export default {};
</script>

