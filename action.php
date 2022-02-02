<?php
include 'db_connection.php';
$name = $_POST['name'];
$address = $_POST['address'];
$birthday = $_POST['birthday'];
$zodiac = $_POST['zodiac'];
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="actioncss.css">
    <title>Your 2022</title>
    <script type="module" src="externalJS.js" async></script>
    <script src="minified/gsap.min.js" async></script>
    <script src="node_modules/smooth-scrollbar/dist/smooth-scrollbar.js"></script>
    <html>

<body>

    <div class="scroller">

        <section class="black">
            <div class="heading heading-1 heading-2">Hello <?php echo $name ?> of <?php echo $address ?></div>

        </section>

        <section class="grey grey-1 grey-2">
            <div class="text txt-1">...and your birthday is <?php echo $birthday ?> which makes you 
                <?php
                switch ($zodiac) {
                    case "Aries":
                        echo "an Aries";
                        break;
                    case "Taurus";
                        echo "a Taurus";
                        break;
                    case "Gemini";
                        echo "a Gemini";
                        break;
                    case "Cancer";
                        echo "a Cancer";
                        break;
                    case "Leo";
                        echo "a Leo";
                        break;
                    case "Virgo";
                        echo "a Virgo";
                        break;
                    case "Libra";
                        echo "a Libra";
                        break;
                    case "Scropio";
                        echo "a Scorpio";
                        break;
                    case "Sagittarius";
                        echo "a Sagittarius";
                        break;
                    case "Capricorn";
                        echo "a Capricorn";
                        break;
                    case "Aquarius";
                        echo "an Aquarius";
                        break;
                    case "Pisces";
                        echo "an Aquarius";
                        break;
                    default:
                        echo "I don't know what Zodiac sign is that.";
                }
                ?></div>
        </section>

        <section class="red">
            <div class="horoscope horoscope-1 horoscope-2"> <b class="bold bold-1">Your 2022 horoscope: </b>
                <br> <br>
                <?php
                switch ($zodiac) {
                    case "Aries":
                        echo "Your lucky color for 2022 is Pink";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky numbers are 2 and 6";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky Months are January, July, and November";
                        echo "<br>";
                        echo "<br>";
                        echo "A new beginning on the horizon is waiting for you Aries while welcoming the year 2022 with a cheer.
                    <br>Financial stability is much indicated throughout the year.
                    <br>Although you should limit yourself for lending money on a goodwill in the ddsecond half.
                    <br>Some of you may be more inclined to pursue spiritual contentment towards the end of the first quarter.
                    <br>Your hard work is likely to pay off well as the dream of purchasing a house of your own is now going to come true.
                    <br>Shun off any negativity you may be getting from your peers for your marriage and career choices.
                    <br>Everything is going to happen at the right time and the right time is certainly coming across for you to enjoy in 2022.
                    <br>The heat of pressure may increase at your workplace at the beginning of the second quarter. 
                    <br>Incorporating Yoga and meditation into your routine is likely to grant you a sense of fulfilment.";
                        break;
                    case "Taurus";
                        echo "Your lucky color for 2022 is Yellow";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky numbers are 3 and 9";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky months are July, September, and December";
                        echo "<br>";
                        echo "<br>";
                        echo "Taurus, lift that vibe and dress your best as 2022 is going to be a year of celebrations.
                    <br>You may observe immense growth on the personal and professional front.
                    <br>Students hoping to hear from their favourite universities may pack their bags as the admission news may arrive at the last minute.
                    <br>Non-optional social conventions may cost you dearly at the start of the second quarter, however, careful financial planning may propel your net worth to greater heights by the end of the year.
                    <br>Exercise due caution while travelling overseas.
                    <br>Businessmen and government employees are in for big rewards in 2022.
                    <br>Introduction in some healthy dietary changes is foreseen somewhere in the second quarter which is likely to benefit your health overall.
                    <br>Your beloved and you are likely to bask in the marital glow before the commencement of the third quarter.
                    <br>Some of you may also bag a prestigious award in the second half of the year.";
                        break;
                    case "Gemini";
                        echo "Your lucky color for 2022 is Maroon";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky numbers are 1 and 4";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky months are February, March, August, and October";
                        echo "<br>";
                        echo "<br>";
                        echo "2022 is going to be auspicious for you, Gemini.
                    <br>The year is well suited for your bank balance.
                    <br>Sudden monetary gains may be expected in the third quarter.
                    <br>Hard work and determination may take you from rags to riches.
                    <br>Family togetherness is likely to be your strength this year.
                    <br>Some of you may realize your dream to visit a pilgrimage or begin a spiritual journey.
                    <br>A Godsent mentor is likely to intervene in your professional journey for the better.
                    <br>Feel free to thank the stars for it.
                    <br>Those looking for a job are likely to find the first half quite lucrative.
                    <br>Health needs care and you cannot just ignore that fact.
                    <br>A disciplined health regimen would benefit for sure.
                    <br>Those singles are likely to find someone they can begin their love story with.
                    <br>Much travel and enjoyment are foreseen in the third quarter of the year giving you a chance to meet people and build more connections.
                    <br>Social obligations may be on a rise during the first and last quarters of the year.";
                        break;
                    case "Cancer";
                        echo "Your lucky color for 2022 is White";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky numbers are 6 and 9";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky months are January, May, and September";
                        echo "<br>";
                        echo "<br>";
                        echo "The year 2022 is going to give to ample reasons to smile, Cancer!
                    <br>New opportunities and possibilities are waiting for you on the career front.
                    <br>Money invested in the past is likely to come with multiplied profits.
                    <br>Those craving to buy a luxury vehicle or a bigger property are likely to find this year significantly lucky.
                    <br>Love and harmony are likely to fill your relationship with happiness in the first quarter while smooth sailing is ensured year long.
                    <br>The accomplishments of your children may help you elevate your social status.
                    <br>Job seekers may find the second quarter rather beneficial, as they may gain employment with better job security.
                    <br>Turning to alternative medicine for health benefits may prove to be a game-changer for some of you.
                    <br>Yoga and Pranayama are likely to infuse you with vigour and strength.
                    <br>Long drive, family dinners and other entertainment activities are likely to be your refreshments this year.";
                        break;
                    case "Leo";
                        echo "Your lucky color for 2022 is Brown";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky numbers are 5 and 11";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky months are May, October, and December";
                        echo "<br>";
                        echo "<br>";
                        echo "Set yourself free and go with the flow, Leo. Rejoice in everything you come across!
                    <br>Open yourself to all the beautiful prospects that the year 2022 has to offer.
                    <br>A part-time hobby may turn into a full-fledged business venture.
                    <br>Those planning to expand their business horizons are likely to enter into partnerships towards the mid of year.
                    <br>Considering an extended family vacation may also be on your mind towards the second quarter.
                    <br>The year appears to be productive as well as fruitful for those working in the field of Science, Engineering or IT.
                    <br>Those graduating this year may bag good job opportunities through campus placements or other references.
                    <br>Happiness and excitement are going to be your new best friends in the year 2022, thanks to your disciplined dietary habits.
                    <br>Your love life may go through a difficult phase in mid-year.
                    <br>Make sure you address it on a priority rather than dodging the ball here and there.";
                        break;
                    case "Virgo";
                        echo "Your lucky color for 2022 is Green";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky numbers are 6 and 8";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky months are April, September, and December";
                        echo "<br>";
                        echo "<br>";
                        echo "Rise and shine, Virgo! 2022 is your year to achieve all that you have dreamt for yourself so far.
                    <br>But the ride may not be as easy as it seems.
                    <br>Remind yourself – you are stronger than the challenges that you encounter!
                    <br>Passive sources of income may appear around the second quarter, rendering your financial growth high.
                    <br>The beginning of the year 2022 may not be fruitful on the family front but the mid-year may bring you tons of happiness.
                    <br>A joyful home may become the source of your mental peace.
                    <br>The workload is likely to increase and so are your chances for promotion.
                    <br>Drop high-risk physical activities or workouts off your to-do list.
                    <br>Your lifestyle may be better off too without it.
                    <br>Avoid taking any substantial decisions on the love front in the first quarter.
                    <br>Mutual understanding and fondness for each other are likely to give your relationship a new high towards the second half of the year.";
                        break;
                    case "Libra";
                        echo "Your lucky color for 2022 is Gray";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky numbers are 3 and 6";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky months are February, July, and August";
                        echo "<br>";
                        echo "<br>";
                        echo "The year 2022 is certainly wrapped with good vibes for Libra natives.
                    <br>All you have to do is explore things one by one rather than being in a rush.
                    <br>The increasing warmth among your extended family members is likely to lift your motivation quotient.
                    <br>Your contribution may help someone bag admission to a prestigious college or university.
                    <br>Patience and hard work in the first half of the year may lead to an early promotion in the second half of the year 2022.
                    <br>Those trying to shed weight are likely to see visible results too.
                    <br>Commitment and dedication to excel in the field of your choice would give you collar up moments.
                    <br>Those getting married in 2022 are likely to be in for a blissful and harmonious bond.
                    <br>Although financial stability is in the stars for you you may have to restrict your spendthrift nature in the second half of the year.
                    <br>The outflow of cash may increase near the last quarter.";
                        break;
                    case "Scroprio";
                        echo "Your lucky color for 2022 is Peach";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky numbers are 5 and 9";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky months are January, May, and October";
                        echo "<br>";
                        echo "<br>";
                        echo "Cheer up Scorpio! The excess workload baggage is likely to be shed off this year.
                    <br>Someone may volunteer to help you or you may seek someone’s help – the bottom line is all your pending chores would be timely completed.
                    <br>Some of you may want to begin a new line of business with an innovative idea.
                    <br>Both your expenditure and income are likely to see a steep rise in the beginning.
                    <br>Consider a careful route while acquiring a real estate deal.
                    <br>Medical help may be required for an ailing family elder.
                    <br>Success is much indicated on the professional front.
                    <br>Dedication, hard work and determination are the factors that may be responsible for your growth this year.
                    <br>Include more greens on your plate to avoid feeling lethargic.
                    <br>Overall things look great on the health front – and that should push you to try a new workout regimen rather than shunning away from the one you already do.
                    <br>Some friction between you and your lover may be experienced during mid-year but you would be able to manage things well.";
                        break;
                    case "Sagittarius";
                        echo "Your lucky color for 2022 is Lemon";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky numbers are 7 and 9";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky months are March, June, and October";
                        echo "<br>";
                        echo "<br>";
                        echo "The year 2022 promises you enormous luck and growth. You may emerge victorious in whatever you take up.
                <br>Ward off all competition by staying one step ahead of the process.
                <br>Trust your instinct – it is going to help you much this year.
                <br>Property gain through inheritance may be the highlight of the year for you.
                <br>Risky investments may look appealing, but do not let them lure you.
                <br>A matrimonial alliance may click well with those looking to settle on the marriage front.
                <br>The beginning of the year may not be rewarding on the career front but things may take a turn for the better after April.
                <br>Don't let your work occupancy meddle with your health.
                <br>Timing is crucial for you to improve your vitality and stamina.
                <br>Those playing sports are likely to receive a prestigious award or recognition.
                <br>You may get more quality time to spend with your family.
                <br>Social life is likely to prosper more in the second half.";
                        break;
                    case "Capricorn";
                        echo "Your lucky color for 2022 is Dark Blue";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky numbers are 4 and 8";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky months are January, May, and September";
                        echo "<br>";
                        echo "<br>";
                        echo "The year 2022 comes bearing comfort and contentment in your life.
                <br>Let go of all the past reservations that were holding you back.
                <br>A salary upgrade is foreseen allowing you to finally invest in a property, vehicle or stock market.
                <br>Your economic genius may keep you affluent throughout the year.
                <br>Peace is likely to prevail at home.
                <br>Multiple trips overseas are foreseen which is likely to open new doors of communication for some.
                <br>Celebrations are in order as there may be a new addition to your family.
                <br>Friendly relations with co-workers and office employees are likely to work in your favour.
                <br>Dare to dream and chase after your heart and desires as you are likely to manifest that on a good note too.
                <br>Things move comfortably on the romantic front but no wonder putting more effort into it would get your lover’s special attention.
                <br>Plan date nights, theme weekends to increase warmth or whatever it takes to make your loved one feel more special.
                <br>The last quarter of the year requires you to take care of your health.";
                        break;
                    case "Aquarius";
                        echo "Your lucky color for 2022 is Purple";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky numbers are 6 and 9";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky months are April and August";
                        echo "<br>";
                        echo "<br>";
                        echo "2022 is a year to align your goals and redefine your priorities.
                <br>This year may bring you closer to your primal self and help you connect with nature.
                <br>Investing in gold bonds at the beginning of the year may get you a good return sooner than you expect.
                <br>Social gatherings at home may demand your presence.
                <br>Step up and take more responsibilities at your workplace.
                <br>Mid of the year is likely to give you several opportunities to build a good rapport with your work colleagues and seniors.
                <br>The stars also advise you to maintain a distance from people who cannot stop emitting negativity.
                <br>Adoption of a pet due to a child's demand is also possible in the third quarter of 2022.
                <br>A health mentor is likely to extend tips to get you back in shape.
                <br>Those in love may take their relationship to the next level.
                <br>Some of you are likely to get through the PR process and shift your base to your dream place.";
                        break;
                    case "Pisces";
                        echo "Your lucky color for 2022 is Red";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky numbers are 2 and 9";
                        echo "<br>";
                        echo "<br>";
                        echo "Lucky months are March, June, and December";
                        echo "<br>";
                        echo "<br>";
                        echo "The best way to start the year 2022 is by realizing all your strengths and accepting your flaws.
            <br>Use diplomacy as a weapon to get out of unpleasant situations without revealing your hand.
            <br>Any litigation regarding an ancestral property may result in your favour and rightfully so.
            <br>You deserve a trophy after accomplishing so much in your career.
            <br>Use rational reasoning to resolve any misunderstanding between you and your partner.
            <br>It is a year to stay bonded and connected with each other – and that in fact should be your prime focus.
            <br>New parents are likely to live the best time of their lives, savouring each moment with their little one.
            <br>If you are looking to change your career, you need to design your move.
            <br>Proper research and planning may give you a heads up in whatever you are thinking of trying your hands in.
            <br>You are likely to remain hale and hearty throughout the year.";
                        break;
                    default:
                        echo "Your horoscope for 2022 is to have a valid zodiac sign :D";
                        //source https://www.hindustantimes.com/astrology/horoscope/yearly-horoscope-2022-check-out-what-is-in-store-for-all-zodiac-signs-101641006621049.html
                }
                ?></div>
        </section>

    </div>
</body>


</html>