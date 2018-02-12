<template>
<div class="chat-message">
    <p>{{ messageInfo.message }}</p>
    <small>{{ messageInfo.user.name }}</small>
</div>
</template>

<script>
export default {
    props: ['messageInfo']
}
</script>

<style>
.chat-message:nth-child(even) {
    background: #fff;
}

.chat-message:nth-child(odd) {
    background: #ccc;
}
</style>
