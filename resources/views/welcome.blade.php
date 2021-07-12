@extends("layouts.app")
@section("content")
    <div id="container">
        <section class="welcome_main label_left">
            <img src="images/language.png" class="img-welcome">
            <h2 class="label">Xu Hướng Công Nghệ Lập Trình 2021</h2>
            <p>Sự phát triển của công nghệ thay đổi chóng mặt. Chính vì vậy đòi hỏi phải có cái mới hình thành, tiên
                tiến hơn để thay thế cái cũ.
                <br>
                <br>
                Với khoảng 600 ngôn ngữ lập trình đang có và hàng loạt các ngôn ngữ lập trình mới ra đời thì nhu cầu và
                sự phổ biến của chúng sẽ có sự biến động theo từng năm.
                Do vậy, dù bạn là lập trình viên có kinh nghiệm hay mới bắt đầu học thì việc cập nhật ngôn ngữ lập trình
                mới
                để bắt kịp xu hướng hiện đại và tránh bị đào thải.
            </p>
            <div class="row">
                <div class="maxim">
                    "Không quan trọng bạn đi chậm như thế nào miễn là bạn không dừng lại" - Khổng Tử
                </div>
            </div>
        </section>

        <hr>
        <div class="main-question">
            <h2 class="label label_right">{{ __('label.question') }}</h2>
            <p>
                Lựa chọn ngôn ngữ đầu tiên để bắt đầu bước chân vào thế giới lập trình là hết sức quan trọng, vì nó giúp
                bạn xây dựng nền tảng và hình thành hiểu biết về lĩnh vực này. Thực ra, chọn ngôn ngữ nào không quan
                trọng, miễn là bạn thành thạo nó và liên tục cải thiện kỹ năng phát triển và giải quyết vấn đề của mình.
                Sau đó, nếu muốn bạn có thể chuyển sang ngôn ngữ khác một cách thuận lợi mà không gặp quá nhiều khó khăn
                nữa.
            </p>
        </div>
        <section class="slideshow">
            <div class="content">
                <div class="slider-content">
                    <figure class="shadow"><a href="{{ url('/') }}"><img
                                src="images/flutter.jpg"></a>
                    </figure>
                    <figure class="shadow"><a href="{{ url('/') }}"><img
                                src="images/laravel.png"></a>
                    </figure>
                    <figure class="shadow"><a href="{{ url('/') }}"><img
                                src="images/python.jpg"></a></figure>
                    <figure class="shadow"><a href="{{ url('/') }}"><img
                                src="images/mern.png"></a>
                    </figure>
                    <figure class="shadow"><a href="{{ route('login') }}"><img
                                src="images/swift.png"></a>
                    </figure>
                </div>
            </div>
        </section>
        <div class="row">
            <div class="maxim">
                "{{ __('label.dont_stop') }}" {{ __('label.brian_tracy') }}
            </div>
        </div>
        <hr>
        <section id="feature">
            <h2 class="label">Cùng Nhau Học Lập Trình Tại Sao Không?</h2>
            <div class="row">
                <div class="feature-box col-lg-4">
                    <i class="feature-icon fas fa-bullseye fa-5x"></i>
                    <h3>Bắt Đầu Từ Đâu?</h3>
                    <p>Bạn đang băn khoăn không biết bắt đầu từ đâu, HTZone sẽ hỗ trợ bạn từ bước cơ bản nhất
                        giúp bạn trở thành developer từ con số 0
                    </p>
                </div>
                <div class="feature-box col-lg-4">
                    <i class="feature-icon far fa-check-circle fa-5x"></i>
                    <h3>Học Đi Đôi Với Hành</h3>
                    <p>Ở mổi phần học sẽ kết hợp thực hành, giúp bạn hiểu rõ và hoàn thành phần học một
                        cách nhanh chóng. Cuối bài sẽ có các bài tập tương tự để có thể thực hành thêm nắm vững kiến
                        thức.
                    </p>
                </div>
                <div class="feature-box col-lg-4">
                    <i class="feature-icon fas fa-hand-holding-heart fa-5x"></i>
                    <h3>Hỗ Trợ 24/7</h3>
                    <p>Các phần học và bài tập dựa trên các dự án thực tế mà các thành viên HTZone đã thực nghiệm.
                        Các thành viên thân thiện giúp đỡ nhau để giải quyết các vấn đề khó.
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="maxim">
                    "Hãy tin vào bản thân, đón nhận thử thách, đào sâu bên trong bản thân để chinh phục nỗi sợ hãi. Đừng
                    bao giờ để bất cứ ai hạ gục bạn. Bạn phải tiếp tục đi" - Chantal Sutherland
                </div>
            </div>
        </section>
    </div>
@stop
