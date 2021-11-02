<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="style.css" />
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kurenaido&display=swap" rel="stylesheet" />
</head>

<body>
    <h1 class="fixed-left-side-hello">Hello.</h1>
    <div class="fixed-left-side-body">
        <div class="profile">
            <div class="profile-image center-align">
                <img src="./img/zFON.png" alt="Image portfolio" />
            </div>
            <div class="profile-name center-align">
                <h1 class="user-name">Dmitriy Tkahyk</h1>
                <p>
                    <span class="photoshop-color">Back-end developer</span>
                    in Khmelnitsk
                </p>
            </div>
            <ul class="social-btn">
                <a class="icons-facebook" href="https://www.facebook.com/zdimaby">
                    <img width="32"
                        src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Facebook_icon_%28black%29.svg" />
                </a>
                <a class="icons-instagram" href="https://www.instagram.com/zdimaby/">
                    <img width="32"
                        src="https://upload.wikimedia.org/wikipedia/commons/2/27/CIS-A2K_Instagram_Icon_%28Black%29.svg" />
                </a>
            </ul>
        </div>
    </div>
    <div class="right-side-body">
        <div class="aboutme-section">
            <div class="Section-title">
                <h2>About Me</h2>
                <p>
                    Hi, I'm a beginner backend developer, I'm 23 years old, I'm from
                    Ukraine, the city of Khmelnitsky. Where I studied and trained as a
                    CMS developer with Web-systems Solutions. I have been interested in
                    programming since ~ 16 years old, like a hobi, when I was in the
                    mood and, at my discretion, over all these years, the most
                    informative were 3 months in the company compared to educational
                    institutions, for example. In addition to web programming, I am also
                    involved in programming microcontrollers (stm, atmega), programming
                    radio-controlled aircraft, drones, ships.
                </p>
                <div class="personal-details-right">
                    <h2 class="title">personal details</h2>
                    <table>
                        <tbody>
                            <tr>
                                <td class="td-w25">Full Name</td>
                                <td class="td-w10">:</td>
                                <td class="td-w65">Dmitriy Tkahyk</td>
                            </tr>
                            <tr>
                                <td class="td-w25">Father's Name</td>
                                <td class="td-w10">:</td>
                                <td class="td-w65">Mr. Alexander Tkahyk</td>
                            </tr>
                            <tr>
                                <td class="td-w25">Address</td>
                                <td class="td-w10">:</td>
                                <td class="td-w65">
                                    vul. Gagarin, Yarmolinetsky district, the city of
                                    Khmelnitsky, M.P. Ukraine
                                </td>
                            </tr>
                            <tr>
                                <td class="td-w25">Zip Code</td>
                                <td class="td-w10">:</td>
                                <td class="td-w65">32140</td>
                            </tr>
                            <tr>
                                <td class="td-w25">Phone</td>
                                <td class="td-w10">:</td>
                                <td class="td-w65">+380986677944</td>
                            </tr>
                            <tr>
                                <td class="td-w25">Email</td>
                                <td class="td-w10">:</td>
                                <td class="td-w65">zdimaby@gmail.com</td>
                            </tr>
                            <tr>
                                <td class="td-w25">Website</td>
                                <td class="td-w10">:</td>
                                <td class="td-w65">https://zdimaby.github.io/myPortfolio/</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="aboutme-section">
            <?php require_once 'php.php'; ?>
        </div>
    </div>
</body>

</html>