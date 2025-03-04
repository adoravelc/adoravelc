<?php

namespace App\Models;
use Illuminate\Support\Arr;
class Post
{
    public static function all()
    {
        return [
            [
                'id' => 1,
                'slug' => 'post-1',
                'title' => 'Post 1',
                'author' => 'Chavel',
                'content' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Cras fusce vehicula facilisis pulvinar dictumst dictum. Porta integer nec, vitae velit tempor sagittis luctus. Elementum fermentum aliquet cubilia sollicitudin luctus cubilia tellus nisi suspendisse. Fermentum vel rhoncus risus augue dis. Faucibus nunc urna tortor semper habitasse vitae. Ad platea nec elit sed vulputate sem porttitor laoreet. Vitae blandit pulvinar lacus gravida interdum.
    Felis proin eros luctus quisque tincidunt torquent maecenas nulla. Gravida aenean curabitur a aliquam hac; ac purus. Cras fusce velit ornare nullam mattis lectus suspendisse. Inceptos ultrices commodo risus bibendum proin dolor netus. Vel risus parturient in vitae ut consectetur feugiat vestibulum. Mauris auctor litora bibendum id blandit. Elit litora vivamus enim vivamus turpis class. Eleifend aenean etiam ornare aenean ligula fusce sagittis. Et himenaeos cras aenean sociosqu fringilla dolor sociosqu arcu nulla.',
            ],
            [
                'id' => 2,
                'slug' => 'post-2',
                'title' => 'Post 2',
                'author' => 'Aiko',
                'content' => 'Lorem ipsum odor amet, consectetuer adipiscing elit. Lacus euismod ad fringilla interdum dolor fringilla venenatis. Dui et rhoncus faucibus fringilla aliquet ullamcorper. Cursus ligula pellentesque eros platea malesuada sapien cras curae nulla. Sollicitudin aliquet non neque imperdiet viverra vulputate. Condimentum leo justo morbi maximus ultrices nisi taciti aenean himenaeos.
    Enim adipiscing porttitor habitasse eros enim, iaculis ipsum pulvinar. Convallis amet nam senectus tempus iaculis maximus enim volutpat. Molestie odio ac eros viverra non semper pretium. Lectus tellus felis neque ex auctor tincidunt tellus augue consequat. Integer praesent natoque, maecenas a eleifend magna aptent vel. Nulla dictum sit mus nisi proin mus non nibh nullam. Malesuada massa luctus sapien tristique porta.
    Ridiculus duis torquent feugiat consequat fermentum lacus ullamcorper. At venenatis conubia molestie id turpis hendrerit rutrum ultricies. Mi volutpat pulvinar duis augue, lobortis proin lectus. Class nascetur conubia aenean habitant non porttitor ultrices. Orci habitant ex gravida venenatis tempus class; imperdiet posuere. Sit netus mollis vitae dapibus a blandit himenaeos. Interdum class duis, ad porttitor tincidunt morbi maximus. Erat dignissim vivamus arcu; nibh odio mattis. Porttitor quisque aliquet parturient habitant urna vehicula malesuada malesuada.'
            ],
            [
                'id' => 3,
                'slug' => 'post-3',
                'title' => 'Post 3',
                'author' => 'Ratu',
                'content' => 'Congue magna himenaeos sociosqu condimentum tellus vitae quisque maecenas. Vestibulum pulvinar tempor imperdiet nam nibh scelerisque. Conubia conubia nunc libero id egestas diam proin. Sociosqu porttitor facilisis, quisque neque hendrerit penatibus eget. Vestibulum morbi habitasse quisque ligula ornare eros. Tincidunt aenean dolor conubia aliquet; orci ante enim. Class est massa sem blandit egestas phasellus elit penatibus quis. Morbi gravida leo sapien volutpat pretium bibendum per tellus. Dui euismod inceptos magna ridiculus cras imperdiet nascetur. Massa orci molestie quisque nunc sociosqu blandit ligula est dictum.
                    Tristique rhoncus massa condimentum scelerisque lacus. Aliquet aliquet dignissim hac sit nulla pulvinar mollis. Arcu magna euismod egestas sem; vehicula nullam venenatis sollicitudin nostra. Tellus ad placerat mus cursus dictumst feugiat malesuada non interdum. Maximus elit senectus placerat tempus natoque eu. Dapibus fusce aliquet montes malesuada sit egestas accumsan nisi. Tincidunt himenaeos massa platea, sollicitudin cursus neque porttitor. Cubilia porta inceptos sit accumsan aptent nec ac et. Suscipit luctus hac tortor sagittis, mus vulputate himenaeos sit. Nec aliquet mauris erat, pulvinar justo curabitur est lacinia.'
            ]
        ];
    }

    public static function find($slug){
        $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug); //ini kalo pake function callback
        if(! $post){
            abort(404);
        }
        return $post;
        // return $post = Arr::first(static::all(), function ($post) use ($slug) {
        //     return $post['slug'] == $slug;
        // });
    }
}
?>