<template>
    <div class="project" style="">
        <div class="container">
            <div class="project__subtitle">
                <h4>{{ project?.category }}</h4>
                <p>{{ project?.date }}</p>
            </div>
            <div class="project__title">
                <h1>{{ project?.title }}</h1>
            </div>
            <div class="project__description">
                <p>
                    {{ project?.description }}
                </p>
            </div>
            <div class="project__cta">
                <a :href="`projects/${project.id}`">
                    <span>Show project</span>
                    <ion-icon name="arrow-forward-outline"></ion-icon>
                </a>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        project: {
            type: Object,
        },
    },
};
</script>
