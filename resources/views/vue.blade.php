<script type="text/x-template" id="box-dog">
  <div class="box">
    <h1>@{{id}}</h1>

    <h1 v-show="!isFocus('nameVue')" @click="setFoucs('nameVue')">@{{nameVue}}</h1>
    <input v-show="isFocus('nameVue')" v-model="nameVue" />

    <h1>@{{getAge}}</h1>
    <button @click="setLike()">like</button>
    <h1 v-show="owner">@{{owner}}</h1>

    <p v-show="description && !isFocus('description')" @click="setFoucs('description')">@{{tronca}}</p>
    <textarea v-show="isFocus('description')" v-model="description"></textarea>
    <button v-show="!isFocus('')" @click="saveMe()">save me</button>


  </div>
</script>

<script type="text/javascript">
  Vue.component('component-dog', {
    template : '#box-dog',
    data : function(){
      return {
        nameVue : this.name,
        ageN : false,

        editField : '',

      }
    },
    props : {
      id : String,
      name : String,
      age : String,
      owner : String,
      description : String,

    },
    computed : {

      getAge(){
        var ageVue = this.age;
        if (this.ageN) {
          ageVue++
        }

        return ageVue;
      },

      tronca(){
        var desc = this.description.substring(0, 150);
        if (this.description.length > 150) {
          desc += '...';
        }

        return desc;
      }
    },
    methods : {
        setLike(){
        this.ageN = !this.ageN;
      },

      setFoucs(field){
        this.editField = field;
      },

      isFocus(field){
        return this.editField == field
      },

      saveMe(){
        this.setFoucs('');
      }





    }

    }
  );


</script>
