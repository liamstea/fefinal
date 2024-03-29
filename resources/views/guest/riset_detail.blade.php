<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riset Detail</title>

    <!-- @vite(['resources/css/app.css','resources/js/app.js']) -->

    @vite('resources/css/app.css')

    <!-- font Family -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- library fontawesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>
<body class="bg-latar text-black min-h-screen">
    <!-- header -->
    @include('components.headerguest')    

    <!-- Content Start -->
    <section  class="pt-36 sm:pt-40 mb-12 mx-8">
        <div class="bg-white w-full">
            <div class="p-5 md:p-20 w-full">
                <img class="object-cover w-full rounded-md" src="{{ asset('storage/properti/2.jpg') }}" alt="detail tentang kami"
                data-aos="fade-zoom-in"
                data-aos-easing="ease-in-back"
                data-aos-delay="150"
                data-aos-offset="0">
                <div class="flex flex-col justify-between py-4 leading-normal">
                    <h5 class="mb-4 text-xl md:text-3xl font-bold "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">Judul Page</h5>
                    <p class="mb-3 font-normal "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sequi nulla sunt excepturi nisi. Quidem perspiciatis neque molestias! Architecto, provident? Maiores repellendus, vero beatae laborum culpa quibusdam quod cupiditate suscipit et nulla delectus error earum harum alias dolor dolorum doloremque in? Repellat veniam ex impedit temporibus blanditiis eveniet voluptatibus ad.
                    </p>
                    <p class="mb-3 font-normal "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid sequi nulla sunt excepturi nisi. Quidem perspiciatis neque molestias! Architecto, provident? Maiores repellendus, vero beatae laborum culpa quibusdam quod cupiditate suscipit et nulla delectus error earum harum alias dolor dolorum doloremque in? Repellat veniam ex impedit temporibus blanditiis eveniet voluptatibus ad.
                    </p>
                    <p class="mb-3 font-normal "
                    data-aos="fade-zoom-in"
                    data-aos-easing="ease-in-back"
                    data-aos-delay="150"
                    data-aos-offset="0">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo nulla aperiam officiis, nisi quas modi. Corrupti debitis hic cumque ullam harum dignissimos tenetur quod quas voluptates delectus, fugiat animi obcaecati, optio explicabo quis eius aut omnis enim aperiam quidem alias nesciunt culpa? Modi nobis enim nulla, quod, nam magnam sed commodi inventore explicabo corrupti odit mollitia velit a fugit, soluta eos? Reprehenderit vero sapiente quo et quia consequatur fugit, assumenda eum delectus provident, voluptatum voluptas quasi unde nemo? Fuga quis iusto quidem accusamus perspiciatis alias officiis asperiores repellat deserunt vero voluptas minus fugit, pariatur libero tempore commodi voluptatum earum sint?
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Content End -->

    <!-- footer -->
    @include('components.footerguest')

    <!-- javascript -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
    @vite('resources/js/app.js')
</body>
</html>

