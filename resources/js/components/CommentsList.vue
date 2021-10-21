<template>
<div >
    <form action="" method="post" @submit.prevent="submitComment" >
            <div class="">
                <textarea class="form-control" name="comment" id="comment" cols="30" rows="5" v-model="comment"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Submit</button>

    </form>
    <div v-for="comment in comments" :key="comment.id" class="mb-4">
        {{ comment.comment }}
    </div>
</div>
</template>
<script>
export default {
    mounted(){
        axios.get('/blog/posts/1/comments').then( response=>{
            // console.log(response.data)
            this.comments=response.data
        })
    },
    data() {
        return {
            comments:[],
            comment:''
        }
    },

  methods: {
        submitComment(){
         axios.post('/blog/posts/1/comments',{
             comment:this.comment
         }).then( response=>{
            console.log(response.data)
            this.comments.push(response.data)
        })

    }
  },

}
</script>
