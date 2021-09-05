<div class="form-group row align-items-center" :class="{'has-danger': errors.has('title'), 'has-success': fields.title && fields.title.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.post.columns.title') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.title" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('title'), 'form-control-success': fields.title && fields.title.valid}" id="title" name="title" placeholder="{{ trans('admin.post.columns.title') }}">
        <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('title') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('content'), 'has-success': fields.content && fields.content.valid }">
    <label for="content" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.post.columns.content') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <textarea class="form-control" v-model="form.content" v-validate="'required'" id="content" name="content"></textarea>
        </div>
        <div v-if="errors.has('content')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('content') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('image_url'), 'has-success': fields.image_url && fields.image_url.valid }">
    <label for="image_url" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.post.columns.image_url') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.image_url" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('image_url'), 'form-control-success': fields.image_url && fields.image_url.valid}" id="image_url" name="image_url" placeholder="{{ trans('admin.post.columns.image_url') }}">
        <div v-if="errors.has('image_url')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('image_url') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('feedback'), 'has-success': fields.feedback && fields.feedback.valid }">
    <label for="feedback" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.post.columns.feedback') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.feedback" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('feedback'), 'form-control-success': fields.feedback && fields.feedback.valid}" id="feedback" name="feedback" placeholder="{{ trans('admin.post.columns.feedback') }}">
        <div v-if="errors.has('feedback')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('feedback') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('userId'), 'has-success': fields.userId && fields.userId.valid }">
    <label for="userId" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.post.columns.userId') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.userId" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('userId'), 'form-control-success': fields.userId && fields.userId.valid}" id="userId" name="userId" placeholder="{{ trans('admin.post.columns.userId') }}">
        <div v-if="errors.has('userId')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('userId') }}</div>
    </div>
</div>


