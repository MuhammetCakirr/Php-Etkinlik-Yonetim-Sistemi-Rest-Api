<h1>Proje Açıklaması</h1> 
Bu API, etkinlikleri yönetmek ve kullanıcılar arasında etkileşimleri düzenlemek için geliştirilmiştir. API, kullanıcıların etkinlik oluşturmasına, yorum yapmasına ve etkinliklere katılmasına olanak sağlar. Aşağıda kullanılan önemli bileşenler ve nedenleri açıklanmıştır:

<ul>
    <li>
        1. JWT (JSON Web Token) <br>
        JWT'yi kullanmamın nedeni, API'mizin güvenliğini sağlamaktır. JWT, kullanıcıların API'ye erişim sağlamaları için kimlik doğrulama ve yetkilendirme işlemlerini çok güvenli bir şekilde yapmamıza olanak tanır. Kullanıcılar, giriş yaptıklarında kendilerine bir token verilir ve bu token'ı kullanarak API'ye yaptıkları her istekte kimliklerini doğrularlar. Bu sistem, oturum yönetimini kolaylaştırır ve API'ye yapılan her istekte kimlik doğrulama işlemlerini basit ve güvenli bir şekilde gerçekleştirmemizi sağlar. Böylece, yetkisiz kişilerin API'ye erişimini engeller ve sistemimizin güvenliğini artırır.
    </li>
    <li>2. Laravel Resources <br>
Laravel Resources'u kullanarak API yanıtlarımızı daha düzenli ve anlaşılır hale getirmek istedik. API üzerinden dönen verileri, özellikle etkinlikler, yorumlar ve kullanıcılar gibi karmaşık veri yapılarını, tutarlı bir formatta sunabilmek için bu yapıyı tercih ettik. Örneğin, EventResource sınıfı sayesinde etkinlikler hakkında gerekli tüm bilgileri, yorumları ve katılımcıları uygun bir formatta döndürüyoruz. Bu, hem veri yapısını hem de API yanıtlarını çok daha okunabilir ve anlaşılır hale getirir.</li>
    <li>3. Redis <br>
Redis'i API performansını artırmak amacıyla entegre ettik. Redis, sık erişilen verileri önbelleğe alarak veritabanı sorgularını azaltmamıza yardımcı olur. Bu sayede, veriye erişim süresini önemli ölçüde kısaltır ve API'nin yanıt sürelerini hızlandırır. Etkinlikler gibi sıkça sorgulanan verileri Redis'te saklayarak, her seferinde veritabanına sorgu yapmadan hızlı bir şekilde yanıt alabiliyoruz. Bu da genel API performansını ve kullanıcı deneyimini büyük ölçüde iyileştirir.</li>
</ul>

<h1>API Genel Yapısı</h1> 
<ul>
    <li> <b> Etkinlikler (Events):</b> Etkinliklerin listelenmesi, oluşturulması, güncellenmesi ve silinmesi işlemleri yapılabilir. Her etkinlik, ilgili yorumlar ve katılımcılarla birlikte döndürülür.</li>
    <li> <b>Yorumlar (Comments):</b>  Etkinliklere yapılan yorumları yönetir. Her yorum, ilgili kullanıcı bilgileri ile birlikte döndürülür.</li>
    <li> <b>Katılımcılar (Participants):</b>  Etkinliklere katılan kullanıcıları yönetir. Kullanıcılar etkinliklere katılabilir veya etkinliklerden ayrılabilir.</li>
    
</ul>

<hr>
Bu API, etkinlik yönetimi ve kullanıcı etkileşimlerini modern ve etkili bir şekilde yönetmek için güvenlik, performans ve veri biçimlendirme gibi önemli bileşenleri içerir. JWT kimlik doğrulama, Laravel Resources ile veri biçimlendirme ve Redis önbellekleme ile yüksek performans, API'nin güvenliğini ve verimliliğini sağlar.

<hr>

<h1>Project Description</h1> 
This API has been developed to manage events and Decode interactions between users. The API allows users to create, comment on, and participate in events. The following describes the important components used and their reasons:

<ul>
    <li>
        1. JWT (JSON Web Token) <br>
        The reason I use JWT is to ensure the security of our API. JWT allows us to perform authentication and authorization processes for users to gain access to the API in a very secure way. Users are given a token when they log in, and they verify their identity every time they make a request to the API using this token. This system simplifies session management and allows us to perform authentication operations in a simple and secure way for every request made to the API. Thus, it prevents unauthorized people from accessing the API and improves the security of our system.
    < / li>
    <li>2. Laravel Resources <br>
We wanted to make our API responses more organized and understandable by using Laravel Resources. We preferred this structure in order to be able to present the data returned via the API, especially complex data structures such as events, comments and users, in a consistent format. For example, thanks to the EventResource class, we return all the necessary information about events, comments and participants in an appropriate format. This makes both the data structure and the API responses much more readable and understandable.< / li>
    <li>3. Redis <br>
We have integrated Redis to improve API performance. Redis helps us reduce database queries by caching frequently accessed data. In this way, it significantly reduces the access time to data and speeds up the API's response times. By storing frequently queried data, such as events, in Redis, we can get a quick response every time without making a query to the database. This in turn greatly improves the overall API performance and user experience.< / li>
</ul>

<h1>General Structure of the API</h1> 
<ul>
    <li> <b> Events (Events):</b> Listing, creation, updating and deletion of events can be performed. Each event is rotated with relevant comments and participants.< / li>
    <li> <b>Comments (Comments): </b> Manages comments on events. Each comment is returned along with the relevant user information.< / li>
    <li> <b>Participants:</b> Manages users who participate in events. Users can participate in events or leave events.< / li>
    
</ul>

<hr>

This API includes important components such as security, performance and data formatting for event management and managing user interactions in a modern and effective way. High performance with JWT authentication, data formatting with Laravel Resources, and Redis caching ensures the security and efficiency of the API.


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


