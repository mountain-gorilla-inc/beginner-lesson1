<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-start mb-3">
                        <div class="mr-auto">
                            <span class="span-header">Lesson 3</span>
                        </div>
                        <div class="align-self-center">
                            <button type="button" class="btn btn-dark" @click="onBack">戻る</button>
                        </div>
                    </div>
                    
                    <div class="quesion-header">電卓を作成してください。</div>
                    <h3>数字を入力してください</h3>
                    <input type="number" v-model.number="left">
                    <button v-on:click="clearL">C</button>
                    {{ left }}

                    <br>
                    <input type="number" v-model.number="right">
                    <button v-on:click="clearR">C</button>
                    {{ right }}

                    <br>
                    <p>数字を入力したら演算子をクリックしてください、自動で計算が行われます</p>

                    <br>

                    <input type="button" value="+" v-on:click="plus"> 
                    <input type="button" value="-" v-on:click="mins"> 
                    <input type="button" value="*" v-on:click="kake"> 
                    <input type="button" value="/" v-on:click="waru"> 
                        =
                        {{ num }}


                </div>
            </div>
        </div>
    </div>
</div>
</template>

<script>
export default {
    props: {
        //
    },
    data () {
        return {
            left: 0,
            right: 0,
            num: 0
            //
        }
    },
    mounted () {
        //
    },
    watch: {
        //
    },
    computed: {
        //
    },
    methods: {
        clearL:function() {
            this.left = 0   //上の値を0にする
        } ,
        clearR:function() {
            this.right = 0   
        } ,
            plus: function() {
      this.num = this.left + this.right 
    },
    mins: function() {
      this.num = this.left - this.right
    },
    kake: function() {
      this.num = this.left * this.right
    },
    waru: function() {
      this.num = this.left / this.right
    } ,

        onBack() {
            this.$router.push({ name: 'home' })
        }
    },
}
</script>

<style lang="scss" scoped>
@import "resources/sass/variables";
</style>