<template>
  <div>
    <el-card class="box-card">
      <div slot="header" class="clearfix">
       
          <el-page-header @back="goBack" :content="`Category - ${scope}`">
          </el-page-header>
      </div>

      <div>
          <el-form :model="model" :rules="rules" ref="studentForm">

              <el-row :gutter="10">
                  <el-form-item label="Name" required prop="name">
                      <!-- <el-input v-model="model.name" aria-placeholder="Student Name"></el-input> -->
                  </el-form-item>

                   <el-form-item label="Activity name">
    <el-input v-model="form.name"></el-input>
  </el-form-item>

              </el-row>

          </el-form>
      </div>
    </el-card>
  </div>
</template>

<script>
export default {
    name: 'student-form-component',
    mounted() {
    console.log("Component mounted.");
  },
};
</script>
