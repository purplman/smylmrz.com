<template>
    <div id="projects" class="projects">
        <div class="container">
            <div class="projects__grid">
                <Project
                    :project="project"
                    v-for="project in projects"
                    :key="project.id"
                ></Project>
            </div>
        </div>
    </div>
</template>

<script>
import Project from "./Project";
export default {
    data() {
        return {
            projects: [
                {
                    id: 1,
                    name: "esport.az",
                },
            ],
        };
    },
    mounted() {},
    components: {
        Project,
    },
};
</script>
