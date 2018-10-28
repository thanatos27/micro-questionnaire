<template>
    <div class="container">
        <form action="/votes" method="POST">
            <div class="form-group row">
                <label>アンケート名</label>
                <input type="text" id="name" name="name" class="form-control">
            </div>
            <div class="form-group row">
                <label>説明</label>
                <textarea rows="5" id="description" name="description" class="form-control"></textarea>
            </div>
            <div class="form-group row">
                <label>選択肢1</label>
                <input type="text" id="choice_text_1" name="choice_text_1" v-model="choice1" class="form-control">
            </div>
            <div class="form-group row">
                <label>選択肢2</label>
                <input type="text" id="choice_text_1" name="choice_text_2" v-model="choice2" class="form-control">
            </div>
            <div class="row justify-content-center">
                <button type="submit" class="btn btn-primary col-md-12">Submit</button>
            </div>
        </form>

        <div class="row">
            <p>プレビュー</p>
        </div>

        <div class="row">
            <div class="col-md-6">
                <button type="button" class="btn btn-choice">{{ choice1 }}</button>
            </div>
            <div class="col-md-6">
                <button type="button" class="btn btn-choice">{{ choice2 }}</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
  data: function() {
    return {
      choice1: '',
      choice2: ''
    };
  }
};
</script>
