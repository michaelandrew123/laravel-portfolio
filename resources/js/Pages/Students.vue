<template>
    <app-layout title="Student Record">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Student
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg"> 
                
                        

                           <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Full Name
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Course
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                    Date of Enrollment
                                                </th> 
                                                <th scope="col" class="relative px-6 py-3">
                                                    <span class="">Edit</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr v-for="x in students" :key="x.id">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        
                                                        <div class="ml-4">
                                                            <div class="text-sm font-medium text-gray-900">
                                                                {{ x.full_name}}
                                                            </div> 
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-sm text-gray-900">{{ x.course }}</div> 
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                        {{ x.date_of_enrollment }}
                                                    </span>
                                                </td> 
                                                <td class="px-6 py-4 whitespace-nowrap text-left text-sm font-medium">
                                                    <!-- <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a> -->
                                                            <!-- <span @click="myStudentEdit(x.id)"  data-toggle="modal" data-target="#edit_student">click</span>
 :href="`api/students/${x.id}`"
                                                             -->

                                                        <span data-toggle="modal" class="cursor-pointer pl-2 " :data-target="`#edit_student${x.id}`" @click="myStudentEdit(x.id)" >Edit</span>
               
               
                                                                    <div class="modal fade edit_student" :id="'edit_student' + x.id " :rel="'edit_student' + x.id " tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                                                                        <div class="modal-dialog" role="document">
                                                                            <div class="modal-content">
                                                                                    <div class="modal-header">
                                                                                            <h5 class="modal-title">Modal title</h5>
                                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                                <span aria-hidden="true">&times;</span>
                                                                                            </button>
                                                                                        </div>
                                                                                <div class="modal-body">
                                                                                    <div class="container-fluid">
                                                                                        

                                                                                        <form id="studentEditForm" @submit.prevent="updateStudent">
                                                                                            <div class="form-group">
                                                                                              <label for="full_name">Full Name </label>
                                                                                              <input type="text" name="full_name" id="full_name" v-model ="editStudent.full_name"  class="form-control" placeholder="Enter your full name" aria-describedby="helpId">
                                                                                              <small id="helpId" class="text-muted">Add your full name</small>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for="date_of_enrollment">Date of Enrollment</label>
                                                                                                <input type="date" name="date_of_enrollment" v-model="editStudent.date_of_enrollment" id="date_of_enrollment" class="form-control" placeholder="Select your date of enrollment" aria-describedby="helpId">
                                                                                                <small id="helpId" class="text-muted">Date of Enrollment</small>
                                                                                            </div>
                                                                                            <div class="form-group">
                                                                                                <label for=""></label>
                                                                                                <select class="form-control" v-model="editStudent.course" name="course" id="add_course">
                                                                                                    <option :value="x.course" disabled selected >{{ x.course}}</option> 
                                                                                                    <option :value="y.course_name" v-for="y in courses " :key="y.id">{{ y.course_name }}</option>
                                                                                                </select>
                                                                                            </div> 
                                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                                            <button type="submit" class="btn btn-primary">Save</button>
                                                                                        </form>
 
                                                                                    </div>
                                                                                </div> 
                                                                            </div>
                                                                        </div>
                                                                    </div>
    <!-- 
                                                                 <span data-toggle="modal" :data-target="'#edit_student' + $x.id"  >click</span>
         
           -->
 
                                                     <!-- <inertia-link :href="`/api/students/${x.id}/edit`">Edit</inertia-link>
                                                     -->
                                                     <inertia-link @click="myStudentDelete(x.id)" href="#" >Delete</inertia-link>
                                                    <!-- <a href="" class="text-indigo-600 hover:text-indigo-900">Delete</a> -->
                                                </td>
                                            </tr>

                                            <!-- More items... -->
                                        </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                            </div>
 
                </div>
            </div>
        </div>
    
        <template #footer >
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm  m-auto" data-toggle="modal" data-target="#addStudent">
                Add Student
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="addStudent" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                        <div class="modal-body">
 
                            <div class="container-fluid">
                            
                                <form id="studentForm" @submit.prevent="addStudent">
                                    <div class="form-group">
                                      <label for="full_name">FullName</label>
                                      <input type="text" name="full_name" v-model="student.full_name" id="full_name" class="form-control" placeholder="Please enter your full name" aria-describedby="helpId">
                                      <small id="helpId" class="text-muted">Add your full name</small>
                                    </div>
                                    <div class="form-group">
                                      <label for="date_of_enrollment">Date of Enrollment</label>
                                      <input type="date" name="date_of_enrollment" v-model="student.date_of_enrollment" id="date_of_enrollment" class="form-control" placeholder="Select your date of enrollment" aria-describedby="helpId">
                                      <small id="helpId" class="text-muted">Date of Enrollment</small>
                                    </div>
                                    <div class="form-group">
                                      <label for=""></label>
                                      <select class="form-control" v-model="student.course" name="course" id="add_course">
                                        <option value="" disabled selected >Select Course</option> 
                                        <option :value="y.course_name" v-for="y in courses " :key="y.id">{{ y.course_name }}</option>
                                      </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>  


                            </div>
 
                        </div> 
                    </div>
                </div>
            </div>
            <!--End add student sections -->
   
            <!-- Button trigger course modal -->
            <button type="button" class="btn btn-primary btn-sm m-auto" data-toggle="modal" data-target="#addCourse">
              Add Course
            </button>
            
            <!-- Modal -->
            <div class="modal fade" id="addCourse" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                            <div class="modal-header">
                                    <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                </div>
                        <div class="modal-body">
                            <div class="container-fluid"> 
                                <form id="courseForm" @submit.prevent="addCourse">
                                    <div class="form-group">
                                      <label for="course_name">Enter Course</label>
                                      <input type="text" name="course_name" v-model="course.course_name" id="course_name" class="form-control" placeholder="Enter Course" aria-describedby="helpId">
                                      <small id="helpId" class="text-muted">Add Course</small>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>

                            </div>
                        </div> 
                    </div>
                </div>
            </div>
              



         
        </template>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'

    export default {
        components: {
            AppLayout,
            Welcome,
        },
        data(){
            return {
                students: [],
                editStudent: [],
                student: {
                    full_name: '',
                    date_of_enrollment: '',
                    course: ''
                },
                courses: [],
                course: {
                    course_name: ''
                } 
            }
        },
        methods:{
            async addStudent(){
                const res = await axios.post('api/students', this.student);
                if(res.status === 201){
                    Toast.fire({
                        icon: 'success',
                        title: res.data
                    });
                    document.getElementById('studentForm').reset();
                    $('#addStudent').modal('hide'); 

                    Fire.$emit('addedStudent');
                }
            },
            async addCourse(){ 
                const res = await axios.post('api/courses', this.course); 
                if(res.status === 201){
                    Toast.fire({
                        icon: 'success',
                        title: res.data
                    });
                    document.getElementById('courseForm').reset();
                    $('#addCourse').modal('hide'); 

                    Fire.$emit('addedCourse')
                } 
            },
            myStudentEdit(id){
                axios.get(`api/students/${id}`)
                .then((response)=>{ 
                    this.editStudent = response.data;
                }).catch((err)=>{
                    console.log(err);
                });
            },
            
            async updateStudent(){ 
                const res = await axios.put(`api/students/${this.editStudent.id}`, this.editStudent); 
                    if(res.status === 200){
                        Toast.fire({
                            icon: 'success',
                            title: res.data
                        });
                        $('.edit_student').modal('hide');
                        
                        Fire.$emit('updatedStudent');

                    }else{
                        console.log("something error updating student");
                    }
            },
            async myStudentDelete(id){
                
                const res = await axios.delete(`api/students/${id}`)
                if(res.status === 200){
                    Toast.fire({
                        icon: 'success',
                        title: res.data
                    });

                    Fire.$emit('deletedSutdent');
                }
            },

            getStudent(){
                axios.get('api/students')
                .then((res)=>{
                    this.students = res.data;

                    Fire.$emit('edited_student');
                }).catch((err)=>{
                    console.log(err);
                })
            },  
            // myStudentEdit(id){
                
            //     axios.get(`api/student/${id}`)
            //     .then((res)=>{
            //         this.editStudent = res.data;
            //     }).catch((err)=>{
            //         console.log(err);
            //     });
 
            // }, 
            getCourse(){
                axios.get('api/courses')
                .then((res)=>{
                    this.courses = res.data;
                }).catch((err)=>{
                    console.log(err);                        
                })
            }  
        },
        created(){
            // this.myStudentEdit(this.id); 
            // Fire.$on('edited_student', ()=>{
            //     this.myStudentEdit(this.id); 
            // });

            this.getStudent();
            this.getCourse();
            Fire.$on('addedStudent', ()=>{
                this.getStudent();
            });
            Fire.$on('addedCourse', ()=>{
                this.getCourse();
            });
            
            Fire.$on('updatedStudent', ()=>{
                this.getStudent();
            });

            Fire.$on('deletedSutdent', ()=>{
                this.getStudent();
            })
            

        }



    }
</script>
