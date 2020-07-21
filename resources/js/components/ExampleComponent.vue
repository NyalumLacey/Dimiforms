<template>
    <div class="container" id="scripts"></div>
</template>

<script>
    export default {
    name: 'app',
    mounted() {
        let externalScript = document.createElement('script')
        externalScript.setAttribute('src', 'plugins/jquery/js/jquery.js')
        document.head.appendChild(externalScript)
    }
    }
</script>
