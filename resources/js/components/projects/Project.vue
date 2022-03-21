<template>
    <div class="project">
        <div class="project__expander trigger">
            <ion-icon name="scan-outline"></ion-icon>
        </div>
        <div class="project__img">
            <img src="http://placehold.jp/1000x1000.png" alt="" />
        </div>
        <div class="project__content">
            <h2>
                <a href="/projects/">{{ project.name }}</a>
            </h2>
            <ul>
                <li>
                    <a href="">tag-1</a>
                </li>
                <li>
                    <a href="">tag-2</a>
                </li>
            </ul>
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
