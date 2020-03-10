<template>
  <div class="home">
    <notes />
  </div>
</template>

<script>
// @ is an alias to /src

import Notes from "../components/Notes";
export default {
  name: 'Home',
  components: {
    Notes
  }
}
</script>
