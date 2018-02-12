<template>
    <div class="chat-log">
        <chat-message v-for="(messageInfo, index) in messages" :key="index" :messageInfo="messageInfo"></chat-message>
        <div class="empty" v-show="messages.length == 0">
            Nothing here yet!
        </div>
    </div>
</template>

<script>
export default {
    props: ['messages']
}
</script>

<style>
.empty {
    padding: 1rem;
    text-align: center;
}
</style>
