<template>
    <div>
        <form @submit.prevent="postReview">
            <legend>Movie Rating</legend>

            <div class="form-group">
                <label for="">Your ReView</label>

                <star-rating :star-size="20" v-model="formData.rating"></star-rating>
            </div>

            <div class="form-group">
                <label for="">Heading</label>
                <input type="text" class="form-control" v-model="formData.Heading" id="" placeholder="Input...">
            </div>

            <div class="form-group">
                <label for="">Comments</label>
                <input type="text" class="form-control" v-model="formData.Comment"  placeholder="Input...">
            </div>


            <button type="submit"  class="button" >Submit</button>

        </form>
    </div>
</template>

<script>
    export default {
        props:['Movie','url'],
        data(){
            return {
                formData:{}
            }
        },
        methods:{
          postReview(){
              this.formData.Movie_id=this.Movie.id;

              axios.post(this.url,this.formData)
                  .then(data=>{
                      location.reload();
                  })
                  .catch(error=>{
                      console.log(error);
                  })
          }
        },
    }
</script>
