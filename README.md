# Discord Ouath2

Bu basit web uygulaması, Discord OAuth2 kimlik doğrulama protokolünü kullanarak giriş yapma işlevselliğini sağlar.

## Kullanım

1. İlk olarak, bu uygulamayı çalıştırmak için bir web sunucusuna ihtiyacınız olacak. Genellikle bu, yerel bilgisayarınızda bir web sunucusu çalıştırarak yapılır. Örneğin, PHP'nin yerel bir sunucuda çalıştırılması için XAMPP veya WAMP gibi bir çözüm kullanabilirsiniz.

2. Ardından, Discord Developer Portal üzerinden bir uygulama oluşturmanız gerekecek. Bu adımda size verilen `client_id` ve `client_secret` değerlerini not alın.

3. OAuth2 kimlik doğrulama akışını başlatmak için tarayıcınızda `index.php` sayfasını açın ve "Giriş Yap" bağlantısına tıklayın.

4. Bu bağlantı sizi Discord'a yönlendirecek ve uygulamanıza erişim izni vermenizi isteyecektir. İzin verdiğinizde, sizi geri yönlendirecek ve `process-oauth.php` sayfasına Discord'tan bir kodla birlikte geri dönecektir.

5. `process-oauth.php` sayfası, Discord'tan alınan kodu kullanarak erişim belirteci alır. Bu belirteci kullanarak kullanıcı hakkında bilgi alabilir ve uygun işlemleri yapabilirsiniz.

## Dosyalar

- `index.php`: Giriş yapma sayfası. Discord'a yönlendirme bağlantısı bulunmaktadır.
- `init-oauth.php`: Discord kimlik doğrulama akışını başlatan sayfa. Bu sayfa, Discord'a yönlendirir.
- `process-oauth.php`: Discord'tan dönen kodu kullanarak erişim belirteci alır ve kullanıcı hakkında bilgi alır.

## Geliştirme Ortamı

Bu uygulama PHP ile geliştirilmiştir. Sunucu olarak Apache veya Nginx kullanabilirsiniz.

## Lisans

Bu proje MIT Lisansı altında lisanslanmıştır. Daha fazla bilgi için [LICENSE](LICENSE) dosyasına bakınız.
