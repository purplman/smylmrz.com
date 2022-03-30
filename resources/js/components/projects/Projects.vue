<template>
    <div id="projects" class="projects">
        <div class="container">
            <div class="projects__grid">
                <Spinner v-if="!projects.length" />
                <Project
                    :project="project"
                    v-for="project in projects"
                    :key="project.id"
                ></Project>
            </div>
        </div>
    </div>
</template>

<script setup>
import Project from "./Project";
import Spinner from "../Spinner.vue";
import { ref, onMounted } from "vue";

const projects = ref([]);

const getProjects = async () => {
    const { data } = await axios("/api/projects");

    projects.value = data.data;
};

onMounted(() => {
    getProjects();
});
</script>
