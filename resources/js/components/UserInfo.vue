<template>
    <div>
        <div class="info">
            <p><small> <strong class="text-muted">{{ createDate }}</strong></small></p>
            <p><small> <strong class="text-muted">{{ updateDate }}</strong></small></p>
            <!-- <p><small> <a :href="user.url">{{ user.name }}</a></small></p> -->
        </div>
    </div>
</template>
<script>
export default {
    props: ['model', 'created', 'updated'],
    computed: {
        createDate() {
            return this.created + " " + this.model.created_date;
        },
        updateDate() {
            return this.updated + " " + this.model.updated_date;
        }
    }, 
    data() {
        return {
            user: this.model.user
        }
    },
}
</script>