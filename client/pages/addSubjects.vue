<template>
<b-container>
  <b-card>
    <div>
          <form method="post" @submit="postData()">
            <div class="form-group">
              <label for="course_code">Course Code</label>
              <input
                type="text"
                class="form-control"
                id="course_code"
                name="course_code"
                placeholder="Enter Course Code"
                v-model="form.course_code"
              />
            </div>
            <div class="form-group">
              <label for="course_description">Course Description</label>
              <input
                type="text"
                class="form-control"
                id="course_description"
                name="course_description"
                placeholder="Enter course description"
                v-model="form.course_description"
              />
            </div>
            <div class="form-group">
              <label for="units">Units</label>
              <input
                type="number"
                class="form-control"
                id="units"
                name="units"
                placeholder="Enter units"
                v-model="form.units"
              />
            </div>
            <div>
              <button type="submit" class="btn btn-success">Add</button>
            </div>
          </form>
      </div>
  </b-card>
  </b-container>
</template>
<script>
import axios from 'axios';
export default {
     data(){
          return {
            form: {
              course_code:null,
              course_description:null,
              units:null,
            }
          }
        },
        methods: {
          postData(){
            const api = "http://localhost/api/add-subject";
            axios.post(api, this.form)
            .then(function (response) {
              console.log(response);
              window.location = '/courseWork'
            })
            .catch(function (error) {
            console.log(error);
            });
          }
        }
};
</script>
