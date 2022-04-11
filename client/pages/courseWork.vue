<template>
  <b-container>
    <b-card>
      <table class="table">
        <thead>
          <th>Course Code</th>
          <th>Course Description</th>
          <th>Units</th>
        </thead>
        <tbody>
          <tr v-for="subject in subjects" :key="subject.id">
            <td>{{ subject.course_code }}</td>
            <td>{{ subject.course_description }}</td>
            <td>{{ subject.units }}</td>
          </tr>
        </tbody>
      </table>
      <nuxt-link to="addSubjects" class="btn btn-success">Add Subject</nuxt-link>
    </b-card>
  </b-container>
</template>

<script>
import axios from "axios";
export default {
    async asyncData() {
      const api = "http://localhost/api/find-all-subjects";
      
      const subjects = await axios.get(api).then((response) => {
      return response.data;
    });
    return { subjects };
  },
};
</script>

