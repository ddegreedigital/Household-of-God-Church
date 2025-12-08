<<?php
    // ================================
    // datafetcher.php
    // This file dynamically provides data for the homepage (e.g., announcements)
    // ================================

    header('Content-Type: application/json');

    // Fake announcements (to be replaced with DB or API data later)
    $announcements = [
        [
            "title" => "Sunday Service Update",
            "date" => "October 10, 2025",
            "description" => "Join us for our special thanksgiving service this Sunday. Come with your friends and family!",
            "image" => "images/events/image1.jpg"
        ],
        [
            "title" => "Midweek Bible Study",
            "date" => "October 8, 2025",
            "description" => "Don’t miss our in-depth Bible study this Wednesday at 6 PM. Experience God's word like never before!",
            "image" => "images/events/image2.jpg"
        ],
        [
            "title" => "Youth Conference 2025",
            "date" => "October 15, 2025",
            "description" => "A life-changing event for all youths! Come and be empowered to fulfill purpose.",
            "image" => "images/events/image3.jpg"
        ],
        [
            "title" => "Night of Worship",
            "date" => "October 20, 2025",
            "description" => "An unforgettable night of praise and worship led by our choir. Entry is free!",
            "image" => "images/events/image4.jpg"
        ]
    ];

    echo json_encode($announcements);
    ?>
    <script>
    const aboutData = {
    About: [{
    type: "about",
    category: "Church",
    year: "1987",
    title: "About Our Church",
    description: "The Household of God Church, founded in February 1987 in Lagos, Nigeria, began in Rev. Chris Okotie’s living room in Ikeja. As membership grew into hundreds and thousands, it expanded to become a nationally recognized ministry. The church is committed to extending care to the less privileged through its GRACE Programme, initiated in 1990, and its television ministry, APOKALUPSIS, spreading its spiritual mission across Nigeria.",
    image: "church.jpg",
    date: "1987-02-01",
    location: "Lagos, Nigeria",
    images: ["church.jpg"]
    },
    {
    type: "about",
    category: "Pastor",
    year: "1958",
    title: "About Our Pastor",
    name: "Rev. Chris Okotie",
    description: "Rev. Chris Okotie, born June 16, 1958, is the pastor of the Household of God Church International Ministries since February 1987. A law graduate from the University of Nigeria, Nsukka (1984), he also attended Grace Fellowship Bible School in Tulsa, Oklahoma. Before his ministry, he pursued a pop music career. Known for his integrity, he leads the annual GRACE Programme and Karis Awards, supporting Nigerian citizens through charitable efforts.",
    image: "pastor.jpg",
    date: "1958-06-16",
    location: "Lagos, Nigeria",
    images: ["pastor.jpg"]
    }
    ]
    };

    const departmentData = [{
    type: "department",
    name: "Choir",
    description: "Leads worship, praises, and inspires the congregation through music ministry."
    },
    {
    type: "department",
    name: "Ushering",
    description: "Ensures order, hospitality, and a welcoming atmosphere in all services."
    },
    {
    type: "department",
    name: "Youth",
    description: "Dedicated to raising godly youths, mentoring and empowering them for leadership."
    },
    {
    type: "department",
    name: "Media",
    description: "Manages live streaming, recordings, and church media content."
    },
    {
    type: "department",
    name: "Evangelism",
    description: "Reaches out to the community with the gospel."
    },
    {
    type: "department",
    name: "Prayer",
    description: "Intercedes for the church, community, and nation."
    },
    {
    type: "department",
    name: "Hospitality",
    description: "Creates a welcoming environment for all visitors."
    },
    {
    type: "department",
    name: "Bible Study",
    description: "Leads small group Bible study sessions."
    },
    {
    type: "department",
    name: "Children Ministry",
    description: "Provides teaching, games, and activities for children."
    },
    {
    type: "department",
    name: "Men's Fellowship",
    description: "Encourages men to grow in faith."
    },
    {
    type: "department",
    name: "Women's Fellowship",
    description: "Empowers women through fellowship and mentoring."
    },
    {
    type: "department",
    name: "Technical",
    description: "Handles lighting, sound, and technical support."
    },
    {
    type: "department",
    name: "Outreach",
    description: "Organizes community projects and outreach events."
    },
    {
    type: "department",
    name: "Finance",
    description: "Manages tithes, offerings, and financial stewardship."
    },
    {
    type: "department",
    name: "Hospital Ministry",
    description: "Visits hospitals to pray for the sick."
    },
    {
    type: "department",
    name: "Prayer Warriors",
    description: "Special intercessors for urgent prayer needs."
    },
    {
    type: "department",
    name: "Social Media",
    description: "Manages social media content and promotions."
    },
    {
    type: "department",
    name: "Event Planning",
    description: "Coordinates church programs and conferences."
    },
    {
    type: "department",
    name: "Mission",
    description: "Leads missions in communities and nations."
    },
    {
    type: "department",
    name: "Administration",
    description: "Handles administrative and clerical tasks."
    }
    ];

    const eventData = {
    "Grace": [{
    "type": "event",
    "eventType": "Grace",
    "year": "1990",
    "title": "Grace Programme",
    "slogan": "",
    "description": "A charity-driven programme instituted to extend care and sharing to the less privileged in society through recognized non-governmental organizations. It is a major benevolence channel of the ministry on an annual basis.",
    "cordinator": "Mr Cordinator",
    "cordinatorTitle": "",
    "cordinatorImage": "grace-coordinator-1990.jpg", // Updated with downloaded image filename
    "eventCategory": "year",
    "date": "1990-12-01",
    "month": "December",
    "images": ["grace-1990-1.jpg", "grace-1990-2.jpg"] // Updated with actual event images from archive
    },
    {
    "type": "event",
    "eventType": "Grace",
    "year": "2006",
    "title": "Grace Event",
    "slogan": "Grace Celebration 2006",
    "description": "A powerful grace event in 2006 focused on charity and community support.",
    "cordinator": "Event Coordinator 2006",
    "cordinatorTitle": "Grace Programme Lead",
    "cordinatorImage": "grace-coordinator-2006.jpg", // Updated with downloaded image filename
    "eventCategory": "year",
    "date": "2006-12-25",
    "month": "December",
    "images": ["grace-2006-1.jpg", "grace-2006-2.jpg", "grace-2006-3.jpg", "grace-2006-4.jpg"] // Updated with actual event images from archive
    },
    {
    "type": "event",
    "eventType": "Grace",
    "year": "2007",
    "title": "Grace Event",
    "slogan": "Grace Celebration 2007",
    "description": "A powerful grace event in 2007 emphasizing benevolence and outreach.",
    "cordinator": "Event Coordinator 2007",
    "cordinatorTitle": "Grace Programme Lead",
    "cordinatorImage": "grace-coordinator-2007.jpg", // Updated with downloaded image filename
    "eventCategory": "year",
    "date": "2007-12-25",
    "month": "December",
    "images": ["grace-2007-1.jpg", "grace-2007-2.jpg", "grace-2007-3.jpg", "grace-2007-4.jpg"] // Updated with actual event images from archive
    },
    {
    "type": "event",
    "eventType": "Grace",
    "year": "2008",
    "title": "Grace Event",
    "slogan": "Grace Celebration 2008",
    "description": "A powerful grace event in 2008 dedicated to supporting the less privileged.",
    "cordinator": "Event Coordinator 2008",
    "cordinatorTitle": "Grace Programme Lead",
    "cordinatorImage": "grace-coordinator-2008.jpg", // Updated with downloaded image filename
    "eventCategory": "year",
    "date": "2008-12-25",
    "month": "December",
    "images": ["grace-2008-1.jpg", "grace-2008-2.jpg", "grace-2008-3.jpg"] // Updated with actual event images from archive
    },
    {
    "type": "event",
    "eventType": "Grace",
    "year": "2008",
    "title": "Grace Event",
    "slogan": "Grace Celebration 2008",
    "description": "A powerful grace event in 2008 with additional community engagement.",
    "cordinator": "Event Coordinator 2008",
    "cordinatorTitle": "Grace Programme Lead",
    "cordinatorImage": "grace-coordinator-2008.jpg", // Updated with downloaded image filename
    "eventCategory": "year",
    "date": "2008-12-25",
    "month": "November",
    "images": ["grace-2008-nov-1.jpg", "grace-2008-nov-2.jpg", "grace-2008-nov-3.jpg", "grace-2008-nov-4.jpg", "grace-2008-nov-5.jpg"] // Updated with actual event images from archive
    },
    {
    "type": "event",
    "eventType": "Grace",
    "year": "2017",
    "title": "Grace Event",
    "slogan": "Grace Celebration 2017",
    "description": "A powerful grace event in 2017 highlighting ministry benevolence.",
    "cordinator": "Event Coordinator 2017",
    "cordinatorTitle": "Grace Programme Lead",
    "cordinatorImage": "grace-coordinator-2017.jpg", // Updated with downloaded image filename
    "eventCategory": "year",
    "date": "2017-12-25",
    "month": "December",
    "images": ["grace-2017-1.jpg", "grace-2017-2.jpg", "grace-2017-3.jpg"] // Updated with actual event images from archive
    },
    {
    "type": "event",
    "eventType": "Grace",
    "year": "2017",
    "title": "Grace Event",
    "slogan": "Grace Celebration 2017",
    "description": "A powerful grace event in 2017 with spring focus.",
    "cordinator": "Event Coordinator 2017",
    "cordinatorTitle": "Grace Programme Lead",
    "cordinatorImage": "grace-coordinator-2017.jpg", // Updated with downloaded image filename
    "eventCategory": "year",
    "date": "2017-12-25",
    "month": "March",
    "images": ["grace-2017-mar-1.jpg", "grace-2017-mar-2.jpg", "grace-2017-mar-3.jpg", "grace-2017-mar-4.jpg"] // Updated with actual event images from archive
    },
    // Sample event with coordinator for testing
    {
    "type": "event",
    "eventType": "Grace",
    "year": "2025",
    "title": "Grace Event",
    "slogan": "Grace Celebration 2025",
    "description": "A powerful grace event in 2025 to support the community.",
    "cordinator": "Pastor Okorie A.",
    "cordinatorTitle": "Head of Finance",
    "cordinatorImage": "pastor-okorie.jpg", // Updated with downloaded image filename
    "eventCategory": "year",
    "date": "2025-12-25",
    "month": "December",
    "images": ["grace-2025-1.jpg", "grace-2025-2.jpg", "grace-2025-3.jpg"] // Updated with actual event images from archive
    }
    ],
    "QueenEsther": [{
    "type": "event",
    "eventType": "Queen Esther",
    "year": "2006",
    "title": "Queen Esther Event",
    "slogan": "Queen Esther Celebration 2006",
    "description": "A empowering women's event in 2006 inspired by biblical Queen Esther.",
    "cordinator": "Women's Ministry Coordinator 2006",
    "cordinatorTitle": "Queen Esther Programme Lead",
    "cordinatorImage": "queen-esther-coordinator-2006.jpg", // Updated with downloaded image filename
    "eventCategory": "month",
    "date": "2006-03-25",
    "month": "March",
    "images": ["queen-esther-2006-1.jpg", "queen-esther-2006-2.jpg"] // Updated with actual event images from archive
    },
    {
    "type": "event",
    "eventType": "Queen Esther",
    "year": "2007",
    "title": "Queen Esther Event",
    "slogan": "Queen Esther Celebration 2007",
    "description": "A powerful women's empowerment event in 2007.",
    "cordinator": "Women's Ministry Coordinator 2007",
    "cordinatorTitle": "Queen Esther Programme Lead",
    "cordinatorImage": "queen-esther-coordinator-2007.jpg", // Updated with downloaded image filename
    "eventCategory": "month",
    "date": "2007-03-25",
    "month": "March",
    "images": ["queen-esther-2007-1.jpg", "queen-esther-2007-2.jpg", "queen-esther-2007-3.jpg"] // Updated with actual event images from archive
    },
    {
    "type": "event",
    "eventType": "Queen Esther",
    "year": "2008",
    "title": "Queen Esther Event",
    "slogan": "Queen Esther Celebration 2008",
    "description": "A transformative event for women in 2008.",
    "cordinator": "Women's Ministry Coordinator 2008",
    "cordinatorTitle": "Queen Esther Programme Lead",
    "cordinatorImage": "queen-esther-coordinator-2008.jpg", // Updated with downloaded image filename
    "eventCategory": "month",
    "date": "2008-03-25",
    "month": "March",
    "images": ["queen-esther-2008-1.jpg", "queen-esther-2008-2.jpg"] // Updated with actual event images from archive
    },
    {
    "type": "event",
    "eventType": "Queen Esther",
    "year": "2017",
    "title": "Queen Esther Event",
    "slogan": "Queen Esther Celebration 2017",
    "description": "A significant women's ministry event in 2017.",
    "cordinator": "Women's Ministry Coordinator 2017",
    "cordinatorTitle": "Queen Esther Programme Lead",
    "cordinatorImage": "queen-esther-coordinator-2017.jpg", // Updated with downloaded image filename
    "eventCategory": "month",
    "date": "2017-03-25",
    "month": "March",
    "images": ["queen-esther-2017-1.jpg", "queen-esther-2017-2.jpg", "queen-esther-2017-3.jpg", "queen-esther-2017-4.jpg", "queen-esther-2017-5.jpg"] // Updated with actual event images from archive
    },
    {
    "type": "event",
    "eventType": "Queen Esther",
    "year": "2017",
    "title": "Queen Esther Event",
    "slogan": "Queen Esther Celebration 2017",
    "description": "Spring extension of the Queen Esther programme in 2017.",
    "cordinator": "Women's Ministry Coordinator 2017",
    "cordinatorTitle": "Queen Esther Programme Lead",
    "cordinatorImage": "queen-esther-coordinator-2017.jpg", // Updated with downloaded image filename
    "eventCategory": "month",
    "date": "2017-03-25",
    "month": "April",
    "images": ["queen-esther-2017-apr-1.jpg", "queen-esther-2017-apr-2.jpg"] // Updated with actual event images from archive
    },
    {
    "type": "event",
    "eventType": "Queen Esther",
    "year": "2017",
    "title": "Queen Esther Event",
    "slogan": "Queen Esther Celebration 2017",
    "description": "Autumn session of the Queen Esther event in 2017.",
    "cordinator": "Women's Ministry Coordinator 2017",
    "cordinatorTitle": "Queen Esther Programme Lead",
    "cordinatorImage": "queen-esther-coordinator-2017.jpg", // Updated with downloaded image filename
    "eventCategory": "month",
    "date": "2017-03-25",
    "month": "October",
    "images": ["queen-esther-2017-oct-1.jpg", "queen-esther-2017-oct-2.jpg", "queen-esther-2017-oct-3.jpg"] // Updated with actual event images from archive
    }
    ],
    "FellowshipSunday": [{
    "type": "event",
    "eventType": "Fellowship Sunday",
    "year": "2023",
    "title": "Fellowship Sunday",
    "slogan": "A day of community and worship",
    "description": "Join us for a special service focused on fellowship and spiritual growth.",
    "cordinator": "Fellowship Coordinator 2023",
    "cordinatorTitle": "Community Outreach Lead",
    "cordinatorImage": "fellowship-coordinator-2023.jpg", // Updated with downloaded image filename
    "eventCategory": "month",
    "date": "2023-11-12",
    "month": "November",
    "images": ["fellowship-2023-1.jpg", "fellowship-2023-2.jpg", "fellowship-2023-3.jpg"] // Updated with actual event images from archive
    },
    {
    "type": "event",
    "eventType": "Fellowship Sunday",
    "year": "2024",
    "title": "Fellowship Sunday",
    "slogan": "Building bonds in Christ",
    "description": "A time to connect with one another and share in the Lord's grace.",
    "cordinator": "Fellowship Coordinator 2024",
    "cordinatorTitle": "Community Outreach Lead",
    "cordinatorImage": "fellowship-coordinator-2024.jpg", // Updated with downloaded image filename
    "eventCategory": "month",
    "date": "2024-05-19",
    "month": "May",
    "images": ["fellowship-2024-1.jpg", "fellowship-2024-2.jpg", "fellowship-2024-3.jpg"] // Updated with actual event images from archive
    }
    ],
    "HallelujahParty": [{
    "type": "event",
    "eventType": "Hallelujah Party",
    "year": "2022",
    "title": "Hallelujah Party",
    "slogan": "Praise and worship celebration",
    "description": "An electrifying night of praise, worship, and thanksgiving.",
    "cordinator": "Worship Coordinator 2022",
    "cordinatorTitle": "Praise Team Lead",
    "cordinatorImage": "hallelujah-coordinator-2022.jpg", // Updated with downloaded image filename
    "eventCategory": "year",
    "date": "2022-12-31",
    "month": "December",
    "images": ["hallelujah-2022-1.jpg", "hallelujah-2022-2.jpg", "hallelujah-2022-3.jpg"] // Updated with actual event images from archive
    },
    {
    "type": "event",
    "eventType": "Hallelujah Party",
    "year": "2023",
    "title": "Hallelujah Party",
    "slogan": "Entering the new year with praise",
    "description": "Our annual New Year's Eve celebration with music and fellowship.",
    "cordinator": "Worship Coordinator 2023",
    "cordinatorTitle": "Praise Team Lead",
    "cordinatorImage": "hallelujah-coordinator-2023.jpg", // Updated with downloaded image filename
    "eventCategory": "year",
    "date": "2023-12-31",
    "month": "December",
    "images": ["hallelujah-2023-1.jpg", "hallelujah-2023-2.jpg"] // Updated with actual event images from archive
    }
    ],
    "BabyDedication": [{
    "type": "event",
    "eventType": "Baby Dedication",
    "year": "2024",
    "title": "April Baby Dedication",
    "slogan": "Welcoming our little ones",
    "description": "A special service to dedicate our babies to God.",
    "cordinator": "Family Ministry Coordinator 2024",
    "cordinatorTitle": "Baby Dedication Lead",
    "cordinatorImage": "baby-dedication-coordinator-2024.jpg", // Updated with downloaded image filename
    "eventCategory": "month",
    "date": "2024-04-14",
    "month": "April",
    "images": ["baby-dedication-2024-1.jpg", "baby-dedication-2024-2.jpg"] // Updated with actual event images from archive
    },
    {
    "type": "event",
    "eventType": "Baby Dedication",
    "year": "2023",
    "title": "August Baby Dedication",
    "slogan": "Presenting our children to the Lord",
    "description": "A joyful event for families to dedicate their new babies to the church.",
    "cordinator": "Family Ministry Coordinator 2023",
    "cordinatorTitle": "Baby Dedication Lead",
    "cordinatorImage": "baby-dedication-coordinator-2023.jpg", // Updated with downloaded image filename
    "eventCategory": "month",
    "date": "2023-08-20",
    "month": "August",
    "images": ["baby-dedication-2023-1.jpg", "baby-dedication-2023-2.jpg"] // Updated with actual event images from archive
    }
    ],
    "ChristmasCarol": [{
    "type": "event",
    "eventType": "Christmas Carol",
    "year": "2023",
    "title": "Christmas Carol Service",
    "slogan": "Singing praises for His birth",
    "description": "Our annual Christmas Carol service with special performances.",
    "cordinator": "Music Ministry Coordinator 2023",
    "cordinatorTitle": "Carol Service Lead",
    "cordinatorImage": "christmas-carol-coordinator-2023.jpg", // Updated with downloaded image filename
    "eventCategory": "month",
    "date": "2023-12-17",
    "month": "December",
    "images": ["christmas-carol-2023-1.jpg", "christmas-carol-2023-2.jpg", "christmas-carol-2023-3.jpg"] // Updated with actual event images from archive
    },
    {
    "type": "event",
    "eventType": "Christmas Carol",
    "year": "2022",
    "title": "Christmas Carol Service",
    "slogan": "Celebrating the birth of Christ",
    "description": "A festive night of carols and readings.",
    "cordinator": "Music Ministry Coordinator 2022",
    "cordinatorTitle": "Carol Service Lead",
    "cordinatorImage": "christmas-carol-coordinator-2022.jpg", // Updated with downloaded image filename
    "eventCategory": "month",
    "date": "2022-12-18",
    "month": "December",
    "images": ["christmas-carol-2022-1.jpg", "christmas-carol-2022-2.jpg"] // Updated with actual event images from archive
    }
    ],
    "YouthRally": [{
    "type": "event",
    "eventType": "Youth Rally",
    "year": "2024",
    "title": "Youth Rally",
    "slogan": "Empowering the next generation",
    "description": "A vibrant gathering for young believers to grow in faith.",
    "cordinator": "Youth Ministry Coordinator 2024",
    "cordinatorTitle": "Youth Rally Lead",
    "cordinatorImage": "youth-rally-coordinator-2024.jpg", // Updated with downloaded image filename
    "eventCategory": "month",
    "date": "2024-06-15",
    "month": "June",
    "images": ["youth-rally-2024-1.jpg", "youth-rally-2024-2.jpg"] // Updated with actual event images from archive
    }],
    "AnnualConference": [{
    "type": "event",
    "eventType": "Annual Conference",
    "year": "2024",
    "title": "Annual Conference",
    "slogan": "Gathering in His name",
    "description": "Our yearly conference for all members to unite and learn.",
    "cordinator": "Conference Coordinator 2024",
    "cordinatorTitle": "Annual Events Lead",
    "cordinatorImage": "annual-conference-coordinator-2024.jpg", // Updated with downloaded image filename
    "eventCategory": "year",
    "date": "2024-11-30",
    "month": "November",
    "images": ["annual-conference-2024-1.jpg", "annual-conference-2024-2.jpg"] // Updated with actual event images from archive
    }],
    "KarisAward": [{
    "type": "event",
    "eventType": "Karis Award",
    "year": "1996",
    "title": "Karis Award",
    "slogan": "",
    "description": "Instituted in 1996, aimed at appreciating Nigerians who have positively impacted the nation but have not been recognized by the government. It is subsumed into the GRACE programme.",
    "cordinator": "Awards Coordinator 1996",
    "cordinatorTitle": "Karis Award Lead",
    "cordinatorImage": "karis-award-coordinator-1996.jpg", // Updated with downloaded image filename
    "eventCategory": "year",
    "date": "1996-12-01",
    "month": "December",
    "images": ["karis-award-1996-1.jpg", "karis-award-1996-2.jpg"] // Updated with actual event images from archive
    }]
    };

    const mediaData = [{
    type: "media",
    title: "Sunday Fellowship - January 2025",
    date: "Jan 12, 2025",
    description: "Join us for worship, word, and celebration as we began the new year.",
    src: "https://www.youtube.com/embed/lhfk1X072kc"
    },
    {
    type: "media",
    title: "Christmas Carol 2024",
    date: "Dec 20, 2024",
    description: "A night of joyful carols, praise and worship as we celebrated Christmas together.",
    src: "https://www.youtube.com/embed/lhfk1X072kc"
    },
    {
    type: "media",
    title: "Halleluyah Party 2024",
    date: "Dec 31, 2024",
    description: "An electrifying crossover service filled with music, joy and testimonies.",
    src: "https://www.youtube.com/embed/lhfk1X072kc"
    },
    {
    type: "media",
    title: "Youth Conference 2024",
    date: "Aug 15, 2024",
    description: "Empowering the youth with purpose and vision.",
    src: "https://www.youtube.com/embed/lhfk1X072kc"
    },
    {
    type: "media",
    title: "Easter Service 2024",
    date: "Apr 9, 2024",
    description: "Celebrating the resurrection of our Lord and Savior.",
    src: "https://www.youtube.com/embed/lhfk1X072kc"
    }
    ];

    // Merge all events into one array
    window.groupedData = Object.values(eventData).flat();

    // Keep aboutData, departmentData, mediaData inside a global wrapper
    window.siteData = {
    about: aboutData,
    departments: departmentData,
    events: window.groupedData,
    media: mediaData
    };
    </script>