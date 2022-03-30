<template>
    <div class="spinner__wrapper">
        <div class="spinner"></div>
    </div>
</template>

<style lang="scss" scoped>
.spinner {
    width: 3rem;
    height: 3rem;
    border-radius: 50%;
    border: 2px solid #131313;
    border-top-color: transparent;
    border-bottom-color: transparent;
    animation: spin 1s linear infinite;

    &__wrapper {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }
}
@keyframes spin {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
}
</style>

<script setup></script>
