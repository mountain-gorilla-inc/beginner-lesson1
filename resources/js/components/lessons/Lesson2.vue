<template>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex justify-content-start mb-3">
                        <div class="mr-auto">
                            <span class="span-header">Lesson 2</span>
                        </div>
                        <div class="align-self-center">
                            <button type="button" class="btn btn-dark" @click="onBack">戻る</button>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="quesion-header">１.入力値の合計をしてください。</div>
                         <!-- 更新が反映されない件聞く	 -->
                        <input type="number" v-model.number="left">
                        +
                        <input type="number" v-model.number="right">
                        =
                        {{ total }}
                    </div>
                    <div class="mb-5">
                        <div class="quesion-header">２．年齢を表示してください。</div>
                        <label for="birthday">お誕生日は？</label> <!--labelは不要だが一応残す-->
                        <input type="date" id="birthday" v-model="birthday"> <!-- 誕生日を取得 -->
                        <p v-if="age" >= 0">{{ age }} 歳ですね！</p>    <!-- ageが0以上なら年齢を表示 -->
                        <p v-else>お誕生日を入力してください。</p>  <!-- それ以外ならメッセージを表示 -->
                    </div>
                    <div class="mb-5">
                        <div class="quesion-header">３．プラスボタン、マイナスボタンで数値を変更できるようにしてください。</div>
                        <label>カウンター</label>
                        <button style="width:2rem;" @click="add">+</button>
                        <button style="width:2rem;" @click="red">-</button>
                        {{count}}
                    </div>
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
            birthday: '2000-01-01', //初期値をいれないとうまくいかないことがあった
            count: 0,
            isComputed: false
        }
    },
    mounted () {

    },
    watch: {
        //
    },
    computed: {
        total() {
              return this.left + this.right
        } ,
        age: function () {

                 if (!this.birthday) {
                   return -1 
                 } else { 
                   moment.locale('ja')
                   return moment().diff(this.birthday,'years') 
                 }
        }
    },
    methods: {
        add: function() {
               this.num++
           },
        red: function() {
               this.num--
           },
        onBack() {
            this.$router.push({ name: 'home' })
        }

    }
}
</script>

<style lang="scss" scoped>
@import "resources/sass/variables";
</style>