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

                    <el-form-item label="name" required prop="name">
                        <el-input v-model="model.name" aria-placeholder="Student name"></el-input>
                    </el-form-item>

                    <el-form-item label="class" required prop="class">
                        <el-input v-model="model.class" aria-placeholder="Student class"></el-input>
                    </el-form-item>

                    <el-form-item label="section" required prop="section">
                        <el-input v-model="model.section" aria-placeholder="Student section"></el-input>
                    </el-form-item>

                    <el-form-item label="email" required prop="email">
                        <el-input v-model="model.email" aria-placeholder="Student email"></el-input>
                    </el-form-item>
                </el-row>
                <el-row :gutter="10">
                    <el-form-item>
                        <el-button type="success" @click="saveForm('studentForm')">Save Student</el-button>
                    </el-form-item>
                </el-row>
            </el-form>
        </div>
    </el-card>
</div>
</template>

<script>
export default {
    name: "student-form-component",
    props:{
      scope: String,
    },
    mounted() {
        console.log("Component mounted.");
    },
    data() {
        return {
            model: {
                name: null,
                class: null,
                section: null,
                email: null,
            },
            rules: {

            }
        }
    },
    methods: {
        goBack() {
            window.location.href = "/students";
        },
        saveForm(formName) {
            this.$refs[formName].validate( (valid) => {
                if (valid){
                  this.$store.dispatch('saveStudent', this.model);
                }
            });
        }
    }
};
</script>
