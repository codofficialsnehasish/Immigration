<?php
    use Illuminate\Support\Str;
    use Carbon\Carbon;
    use App\Models\Setting;

    if(!function_exists('general_settings')){
        function general_settings(){
            $setting = Setting::find(1);
            return $setting ?: null;
        }
    }


    



    
    if (!function_exists('check_status')){
        function check_status($status){
            if($status == 1){
                $str = '<span class="badge bg-success text-light" style="font-size:15px;">Active</span>';
            }else{
                $str = '<span class="badge bg-danger text-light" style="font-size:15px;">Inactive</span>';
            }
            return $str;
        }
    }

    if (!function_exists('check_verified')){
        function check_verified($status){
            if($status == 1){
                $str = '<span class="text-success" title="Verified"><i class="fas fa-check-circle"></i></span></p>';
            }else{
                $str = '<span class="text-danger" title="Not Verified"><i class="fas fa-times-circle"></i></span></p>';
            }
            return $str;
        }
    }

    if (!function_exists('check_visibility')) {
        function check_visibility($val)
        {
            if($val==1){
                $str='<span class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">Visible<i class="bi bi-check2 ms-2"></i></span>';
            }else{
                $str='<span class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">Invisible<i class="bi bi-x-lg ms-2"></i></span>';
            }
            return $str;
        }
    }

    if (!function_exists('check_uncheck')) {
        function check_uncheck($val1,$val2)
        {
            if($val1==$val2){
                $str='checked';
            }else{
                $str='';
            }
            return $str;
        }
    }

    if (!function_exists('generateToken')) {
        function generateToken($length = 32) {
            $bytes = random_bytes($length);
            $apiKey = base64_encode($bytes);
            $urlSafeApiKey = str_replace(['+', '/', '='], ['-', ''], $apiKey);
            return $urlSafeApiKey;
        }
    }

    if (!function_exists('get_user_name')) {
        function get_user_name($field, $id){
            $user = DB::table('users')->where($field, $id)->first();
            if ($user) {
                return $user->name;
            } else {
                return null;
            }
        }
    }

    if (!function_exists('get_category_name')) {
        function get_category_name($id){
            $category = DB::table('categories')->where('id', $id)->first();
            if ($category) {
                return $category->name;
            } else {
                return null;
            }
        }
    }



    if (!function_exists('get_join_green_date')) {
        function get_join_green_date($datetime)
        {
            if($datetime != ''){
                return format_datetime($datetime);
            }else{
                return '';
            }
        }
    }
    
    

    if(!function_exists('createSlug')) {
        function createSlug($name, $model)
        {
            $slug = Str::slug($name);
            $originalSlug = $slug;

            $count = 1;
            while ($model::where('slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $count++;
            }

            return $slug;
        }
    }

    if (!function_exists('is_have_image')) {
        function is_have_image($image) {
            if($image){
                return 'block';
            }else{
                return 'none';
            }
        }
    }

    if (!function_exists('get_product_by_id')) {
        function get_product_by_id($product_id){
            $product = Products::find($product_id);
            return $product;
        }
    }

    if (!function_exists('get_product_price_by_id')) {
        function get_product_price_by_id($product_id){
            $product = Products::find($product_id);
            return $product->price;
        }
    }

    if (!function_exists('get_product_name')) {
        function get_product_name($product_id){
            $product = Products::find($product_id);
            if($product){
                return $product->title;
            }else{
                return '';
            }
        }
    }


    if (!function_exists('is_disabled')) {
        function is_disabled($value){
            if($value){
                return 'disabled';
            }else{
                return '';
            }
        }
    }

    if (!function_exists('get_country_name')){
        function get_country_name($id){
            $country = DB::table('location_countries')->where('id',$id)->value('name');
            return $country;
        }
    }

    if (!function_exists('get_state_name')){
        function get_state_name($id){
            $state = DB::table('location_states')->where('id',$id)->value('name');
            return $state;
        }
    }

    if (!function_exists('get_city_name')){
        function get_city_name($id){
            $city = DB::table('location_cities')->where('id',$id)->value('name');
            return $city;
        }
    }