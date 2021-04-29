# WordPress Theme Skeleton

WordPress için tema geliştirme proje yapısı.

## Açıklama

Bir tema yapımı için gerekli olan temel dosyaları içermektedir. Proje yapısı ilerledikçe; ekleme ve çıkarma işlemleri yapılabilir.

## Kurulum

WordPress bir tema geliştirmek için `wp-content/theme` dizininde bir tema dosyası oluşturulur ve WordPress tema geliştirme proje yapısı bu dosya içerisine yerleştirilir.

```
/wp-content
-themes
--themename
```

`themename` temanın adıdır.

style.css dosyası içerisindeki:

```
Theme Name:   THEME NAME
Text Domain:  THEME DOMAIN
```

alanları doldurulmalıdır.

## Kullanım

WordPress için tema geliştirmek oldukça kolay bir işlemdir. Bu proje yapısında gerekli olan temel dosyalar eklenmiştir.

Tema geliştirmek için aşağıdaki kaynak incelenebilir.

```
https://developer.wordpress.org/themes/getting-started/
```

Dosya yapısı ise şu şekildedir:

```
-classes
-includes
-theme-parts
```

`classes` dizininde; temaya eklenecek olan .php uzantılı class yani sınıf yapıları bulundurulmalıdır. Örneğin; kullanılan CSS framework'une göre tasarlanmış, Navbar Walker
sınıfı bu dizinde bulunabilir.

`includes` dosyasında; tema için gerekli olan .php uzantılı dosyalar bulunmalıdır. Örneğin; css veya js'lerin eklenmesini gerçekleştiren fonksiyonları barındıran dosyalar
bu dizinde saklanabilir.

`theme-parts` dizininde; temanın bazı yerlerinde kullanılmak üzere oluşturulmuş .php uzantılı dosyalar bulundurulmalıdır. Örneğin; sayfalara göre değişen içerik
yapıları bu dizinde saklanmalıdır.

## Destek

Herhangi bir konuda destek almak için aşağıdaki e-mail adresi ile ulaşabilirsiniz.

```
destek@wpkral.com
```
