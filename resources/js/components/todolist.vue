<template>
    <div>
        <h1 class="title">Tasks</h1>
        <p class="info">Here are your tasks:</p>
        <ul class="list">
            <li class="list-items">Task 1</li>
            <li class="list-items">Task 2</li>
            <li class="list-items">Task 3</li>
        </ul>
    </div>
</template>

<script>
export default {
    name: 'TodoList'
};
</script>

<style scoped>
.title {
    text-align: center;
    margin-bottom: 20px;
}
list {
    list-style-type: none;
    padding: 0;
}
.list-items {
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    margin-bottom: 10px;
}
</style>