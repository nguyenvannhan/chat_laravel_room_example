<template>
    <div class="chat-composer">
        <input class="form-control" type="text" placeholder="starting typing your message..." v-model="messageText" @keydown.enter="sendMessage" />
        <button class="btn btn-primary" @click="sendMessage">Send</button>
    </div>
</template>

<script>
export default {
    data: function() {
        return {
            messageText: ''
        }
    },

    methods: {
        sendMessage: function() {
            this.$emit('messagesent', {
                message: this.messageText,
                user: {
                    name: "Me"
                }
            });
            this.messageText = '';
        }
    }
}
</script>

<style>
.chat-composer {
    display: flex;
}

.chat-composer input {
    flex: 1 auto;
}

.chat-composer button {
    border-radius: 0;
}
</style>
