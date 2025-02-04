<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>About Cambodia</title>
</head>
<body>
    <x-header />
    
    <main class="p-10 flex flex-col bg-fixed bg-cover bg-center min-h-screen" style="background-image: url('/images/gradient-sky-bg.jpg');">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 bg-white rounded-lg shadow-xl">
            <h1 class="text-4xl text-gray-900 mb-4">Who We Are</h1>
            <p class="text-black-600 mb-6 text-lg">
            Water of Life (WOL) is an approved, allowed and registered NGO through the Ministry of Foreign Affairs of the Government of Cambodia. It provides education, medical assistance, life skills and Christian discipleship to over Khmer on a weekly basis. Randy Fleming is the Director, with Cambodian leaders Rith Sang, TongChou Chiu and Channa Bo assisting. The ministry center in Phnom Penh is home to  young men between the ages of 14- 25 who needed assistance in life, and resources to complete their education.
            </p>
            <p class="text-black-600 mb-6 text-lg">
            A house for college age girls to receive college education and/or life skills is also located nearby. The Children of Hope Home also finds its shelter under the wings of Water of Life and is home to about 20 children between the ages of 1-13.
            </p>
            <p class="text-black-600 mb-6 text-lg">
            Each week the ministry center offers courses in English, computer science and fine arts the students attend in addition to their normal schooling. The classes are open to the community and provide an opportunity for our young men and women to share the love of Jesus with their peers. Our desire is to help people but only Jesus can fill their lives with hope. For that reason, the heartbeat of our ministry is the study of God’s Word. 
            </p>
            <p class="text-black-600 mb-6 text-lg">
            Jesus said, “You shall know the Truth and the Truth shall make you free.” Such has been the impact of God’s Word on our lives here at Water of Life. Each night the ministry center hosts student led Bible studies and worship times. Our boys and girls take turns teaching from passages read in their one-year, daily Bible reading plan.
            </p>
            <p class="text-black-600 mb-6 text-lg">
            It’s been amazing to see the healing power of God’s Word changing their lives in ways secular programs and counseling could never do.  Because of their love for Jesus and desire to serve Him a church has been birthed and many of the students are now serving as children’s ministry workers, worship leaders, youth group leaders, sound technicians and even pastors!  The work is now spreading to various provinces and villages as they desire to share the life changing message of the gospel with whoever will listen.
            </p>
            <button class="text-base sm:text-lg font-bold bg-custom-cyan text-white px-3 sm:px-4 py-1.5 sm:py-2 rounded-md hover:bg-white hover:text-custom-cyan hover:border hover:border-custom-cyan">
                <a href="/contact">Contact Us To Know More</a>
            </button>
        </div>
    </main>

    <x-footer />

</body>
</html>