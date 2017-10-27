(function () {
    // Create the angular app
    var app = angular.module('Exercises', []);

    //Create the Abdominal controller
    app.controller('Abdominal', function () {
        this.products = listOfExercises;
    });

    //List of exercises
    var listOfExercises = [
        {
            name: "3/4 Sit-Up",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/2001/Male/m/2001_2.jpg",
            //description: "Description A",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/105232m.mp4",
        },
        {
            name: "Ab Crunch Machine",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/225/Male/m/225_2.jpg",
            //description: "Description B",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38031m.mp4"
        },
        {
            name: "Landmine 180's",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1751/Male/m/1751_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/105052m.mp4"
        },
        {
            name: "Weighted Suitcase Crunch",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/2813/Male/m/2813_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/116000/116582m.mp4"
        },
        {
            name: "Bottoms Up",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/2021/Male/m/2021_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/105252m.mp4"
        },
        {
            name: "Spider Crawl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/2061/Male/m/2061_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/105292m.mp4"
        },
        {
            name: "Spell Caster",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/2041/Male/m/2041_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/105272m.mp4"
        },
        {
            name: "Plank",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/908/Male/m/908_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/90000/91032m.mp4"
        },
        {
            name: "Standing Cable Lift",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/936/Male/m/936_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/94000/95621m.mp4"
        },
        {
            name: "Cross-Body Crunch",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/124/Male/m/124_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38841m.mp4"
        },
        {
            name: "Decline Reverse Crunch",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/194/Male/m/194_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38951m.mp4"
        },
        {
            name: "Barbell Ab Rollout",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/207/Male/m/207_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38221m.mp4"
        },
        {
            name: "Elbow To Knee",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/2031/Male/m/2031_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/105262m.mp4"
        },
        {
            name: "Hanging Leg Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/222/Male/m/222_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/54000/54131m.mp4"
        },
        {
            name: "Plate Twist",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/106/Male/m/106_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40961m.mp4"
        },
        {
            name: "Decline Crunch",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/193/Male/m/193_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/52000/53951m.mp4"
        },
        {
            name: "Cocoons",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/2011/Male/m/2011_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/105242m.mp4"
        },
        {
            name: "Air Bike",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/209/Male/m/209_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38051m.mp4"
        },
        {
            name: "Reverse Crunch",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/119/Male/m/119_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40771m.mp4"
        },
        {
            name: "Crunches",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/102/Male/m/102_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38871m.mp4"
        },
        {
            name: "Dead Bug",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/2733/Male/m/2733_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/110000/111362m.mp4"
        },
        {
            name: "Otis-Up",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/2071/Male/m/2071_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/105302m.mp4"
        },
        {
            name: "Dumbbell Side Bend",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/88/Male/m/88_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/39151m.mp4"
        },
        {
            name: "Russian Twist",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/208/Male/m/208_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40371m.mp4"
        },
        {
            name: "Jacknife Sit-Up",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/91/Male/m/91_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40401m.mp4"
        },
        {
            name: "Alternate Heel Touchers",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/105/Male/m/105_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38081m.mp4"
        },
        {
            name: "Sit-Up",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/217/Male/m/217_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/54000/54441m.mp4"
        },
        {
            name: "Side Bridge",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/249/Male/m/249_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41011m.mp4"
        },
        {
            name: "Leg Pull-In",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/95/Male/m/95_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/54000/54211m.mp4"
        },
        {
            name: "Scissor Kick",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/120/Male/m/120_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40331m.mp4"
        },
        {
            name: "Toe Touchers",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/107/Male/m/107_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/54000/54561m.mp4"
        },
        {
            name: "Straight-Legged Hip Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/3461/Male/m/3461_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/118000/118021m.mp4"
        },
        {
            name: "Cross-Crunch",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/3123/Male/m/3123_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/118000/118211m.mp4"
        }
    ];

    //Create the Biceps controller
    app.controller('Biceps', function () {
        this.products = listOfExercises_biceps;
    });

    //List of exercises
    var listOfExercises_biceps = [
        {
            name: "Spider Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/178/Male/m/178_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41371m.mp4"
        },
        {
            name: "Wide-Grip Standing Barbell Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/287/Male/m/287_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41601m.mp4"
        },
        {
            name: "Zottman Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/204/Male/m/204_4.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40601m.mp4"
        },
        {
            name: "Ez-Bar Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/210/Male/m/210_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/39221m.mp4"
        },
        {
            name: "Concentration Curls",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/136/Male/m/136_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38811m.mp4"
        },
        {
            name: "Hammer Curls",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/147/Male/m/147_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40021m.mp4"
        },
        {
            name: "Machine Bicep Curls",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/899/Male/m/899_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/94000/94672m.mp4"
        },
        {
            name: "Barbell Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/169/Male/m/169_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38241m.mp4"
        },
        {
            name: "Dumbbell Bicep Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/223/Male/m/223_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/39011m.mp4"
        },
        {
            name: "Overhead Cable Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/213/Male/m/213_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41111m.mp4"
        },
        {
            name: "Cross Body Hammer Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/236/Male/m/236_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38821m.mp4"
        },

        {
            name: "Dumbbell Alternate Bicep Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/234/Male/m/234_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38991m.mp4"
        },
        {
            name: "Alternate Hammer Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/158/Male/m/158_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/52000/53751m.mp4"
        },
        {
            name: "Reserve Cable Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/141/Male/m/141_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40781m.mp4"
        },
        {
            name: "Seated Dumbbell Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/201/Male/m/201_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40161m.mp4"
        },
        {
            name: "Close-Grip Standing Barbell Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/276/Male/m/276_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38801m.mp4"
        },
        {
            name: "Drag Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/174/Male/m/174_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/52000/53971m.mp4"
        },
        {
            name: "Reverse Barbell Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/9/Male/m/9_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40791m.mp4"
        },
        {
            name: "Lying Supine Dumbbell Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/212/Male/m/212_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41581m.mp4"
        },
        {
            name: "Standing Dumbbell Reverse Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/168/Male/m/168_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41881m.mp4"
        },
        {
            name: "Incline Inner Biceps Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/338/Male/m/338_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40341m.mp4"
        },
        {
            name: "Standing Inner-Biceps Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/190/Male/m/190_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41961m.mp4"
        },
        {
            name: "Reverse Plate Curls",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/320/Male/m/320_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40551m.mp4"
        },
        {
            name: "Standing One-Arm Cable Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/192/Male/m/192_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/54000/54491m.mp4"
        }
    ];

    //Create the Triceps controller
    app.controller('Triceps', function () {
        this.products = listOfExercises_triceps;
    });

    //List of exercises
    var listOfExercises_triceps = [
        {
            name: "Decline Ez Bar Triceps Extension",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/166/Male/m/166_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38931m.mp4"
        },
        {
            name: "Parallel Bar Dip",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1461/Male/m/1461_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/100000/100042m.mp4"
        },
        {
            name: "Dips - Triceps Version",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/55/Male/m/55_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/52000/53961m.mp4"
        },
        {
            name: "Dumbbell Floor Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/680/Male/m/680_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/76000/77242m.mp4"
        },
        {
            name: "Body-Up",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/3991/Male/m/3991_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/118000/119531m.mp4"
        },
        {
            name: "Cable Incline Triceps Extension",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/314/Male/m/314_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38611m.mp4"
        },
        {
            name: "Cable Lying Triceps Extension",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/161/Male/m/161_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38641m.mp4"
        },
        {
            name: "Cable One Arm Tricep Extension",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/80/Male/m/80_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38651m.mp4"
        },
        {
            name: "Cable Rope Overhead Triceps Extension",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/220/Male/m/220_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38671m.mp4"
        },
        {
            name: "Close-Grip Push-Up Off A Dumbbell",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1661/Male/m/1661_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/104042m.mp4"
        },
        {
            name: "Close-Grip Barbell Bench Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/23/Male/m/23_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/58000/59071m.mp4"
        },
        {
            name: "Standing Dumbbell Triceps Extension",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/345/Male/m/345_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/32000/33421m.mp4"
        },
        {
            name: "Reverse Grip Triceps Pushdown",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/179/Male/m/179_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40641m.mp4"
        },
        {
            name: "Push-Ups - Close Triceps Position",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/363/Male/m/363_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/54000/54371m.mp4"
        },
        {
            name: "JM Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/304/Male/m/304_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/54000/54171m.mp4"
        },
        {
            name: "Bench Dips",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/344/Male/m/344_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/52000/53871m.mp4"
        },
        {
            name: "Chain Handle Extension",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/733/Male/m/733_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/76000/77182m.mp4"
        },
        {
            name: "Dumbbell One-Arm Triceps Extension",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/324/Male/m/324_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/54000/54011m.mp4"
        },
        {
            name: "Reverse Triceps Bench Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/358/Male/m/358_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40521m.mp4"
        },
        {
            name: "Tate Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/226/Male/m/226_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/54000/54531m.mp4"
        },
        {
            name: "Close-Grip Dumbbell Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1611/Male/m/1611_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/104912m.mp4"
        },
        {
            name: "One Arm Floor Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/241/Male/m/241_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41311m.mp4"
        },
        {
            name: "Bench Press - Powerlifting",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/663/Male/m/663_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/76000/76662m.mp4"
        },
        {
            name: "Incline Push-Up Close-Grip",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1551/Male/m/1551_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/104852m.mp4"
        },
        {
            name: "Seated Triceps Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/341/Male/m/341_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40931m.mp4"
        },
        {
            name: "Seated Bent-Over Two-Arm Dumbbell Triceps Extension",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/353/Male/m/353_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/54000/54411m.mp4"
        }
    ];

    //Create the Forearms controller
    app.controller('Forearms', function () {
        this.products = listOfExercises_forearms;
    });

    //List of exercises
    var listOfExercises_forearms = [
        {
            name: "Palms-Up Barbell Wrist Curl Over Bench",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/390/Male/m/390_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41031m.mp4"
        },
        {
            name: "Wrist Rotations With Straight Bar",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1691/Male/m/1691_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/104132m.mp4"
        },
        {
            name: "Finger Curls",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1681/Male/m/1681_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/104982m.mp4"
        },
        {
            name: "Wrist Roller",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/142/Male/m/142_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40661m.mp4"
        },
        {
            name: "Seated Palms-Down Barbell Wrist Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/389/Male/m/389_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40881m.mp4"
        },
        {
            name: "Seated One-Arm Dumbbell Palms-Up Wrist Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/386/Male/m/386_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/39991m.mp4"
        },
        {
            name: "Dumbbell Lying Pronation",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/321/Male/m/321_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/39051m.mp4"
        },
        {
            name: "Plate Pinch",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/237/Male/m/237_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40981m.mp4"
        },
        {
            name: "Cable Wrist Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/317/Male/m/317_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38721m.mp4"
        },
        {
            name: "Kneeling Forearm Stretch",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/468/Male/m/468_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/60000/60032m.mp4"
        },
        {
            name: "Seated Dumbbell Palms-Up Wrist Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/384/Male/m/384_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40101m.mp4"
        }
    ];

    //Create the Chest controller
    app.controller('Chest', function () {
        this.products = listOfExercises_chest;
    });

    //List of exercises
    var listOfExercises_chest = [
        {
            name: "Pushups",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/70/Male/m/70_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40811m.mp4"
        },
        {
            name: "Dumbbell Bench Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1/Male/m/1_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/39001m.mp4"
        },
        {
            name: "Barbell Bench Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/360/Male/m/360_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/52000/53781m.mp4"
        },
        {
            name: "Incline Dumbbell Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/380/Male/m/380_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40301m.mp4"
        },
        {
            name: "Dips - Chest Version",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/145/Male/m/145_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38971m.mp4"
        },
        {
            name: "Dumbbell Flyes",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/12/Male/m/12_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/39021m.mp4"
        },
        {
            name: "Decline Dumbbell FLyes",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/36/Male/m/36_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38911m.mp4"
        },
        {
            name: "Incline Push-Up Wide",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1521/Male/m/1521_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/104822m.mp4"
        },
        {
            name: "Svend Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/2761/Male/m/2761_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/114000/114652m.mp4"
        },
        {
            name: "Drop Push",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/779/Male/m/779_4.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/90000/91502m.mp4"
        },
        {
            name: "Incline Push-Up",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/883/Male/m/883_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/98000/99782m.mp4"
        },
        {
            name: "Clock Push-Up",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1581/Male/m/1581_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/104882m.mp4"
        },
        {
            name: "Decline Push-Up",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1411/Male/m/1411_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/100000/100002m.mp4"
        },
        {
            name: "Single-Arm Push-Up",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1361/Male/m/1361_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/98000/99882m.mp4"
        },
        {
            name: "Butterfly",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/214/Male/m/214_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38551m.mp4"
        },
        {
            name: "Push-Up Wide",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1511/Male/m/1511_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/104812m.mp4"
        },
        {
            name: "Isometric Wipers",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1571/Male/m/1571_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/104872m.mp4"
        },
        {
            name: "Front Raise And Pullover",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/273/Male/m/273_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/39941m.mp4"
        },
        {
            name: "Plyo Push-Up",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/910/Male/m/910_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/94000/94712m.mp4"
        },
        {
            name: "Push Up To Side Plank",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/844/Male/m/844_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/90000/90522m.mp4"
        }
    ];

    //Create the Shoulders controller
    app.controller('Shoulders', function () {
        this.products = listOfExercises_shoulders;
    });

    //List of exercises
    var listOfExercises_shoulders = [
        {
            name: "Clean And Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/864/Male/m/864_4.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/98000/99762m.mp4"
        },
        {
            name: "Single-Arm Linear Jammer",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1741/Male/m/1741_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/105032m.mp4"
        },
        {
            name: "Laterals To Front Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1791/Male/m/1791_4.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/105092m.mp4"
        },
        {
            name: "Clean And Jerk",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/670/Male/m/670_4.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/76000/76752m.mp4"
        },
        {
            name: "Push Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/186/Male/m/186_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/78000/78202m.mp4"
        },
        {
            name: "Kettlebell Push Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/519/Male/m/519_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/62000/63182m.mp4"
        },
        {
            name: "Power Partials",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/270/Male/m/270_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40921m.mp4"
        },
        {
            name: "Standing Military Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/370/Male/m/370_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/42000/42041m.mp4"
        },
        {
            name: "Reverse Flyes",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/375/Male/m/375_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40741m.mp4"
        },
        {
            name: "One-Arm Side Laterals",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/173/Male/m/173_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41151m.mp4"
        },
        {
            name: "Alternating Deltoid Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/880/Male/m/880_4.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/94000/94162m.mp4"
        },
        {
            name: "Dumbbell Shoulder Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/328/Male/m/328_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/39131m.mp4"
        },
        {
            name: "Front Dumbbell Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/371/Male/m/371_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/39911m.mp4"
        },
        {
            name: "Seated Dumbbell Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/364/Male/m/364_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40081m.mp4"
        },
        {
            name: "Standing Dumbbell Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/920/Male/m/920_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/94000/94772m.mp4"
        },
        {
            name: "Single Dumbbell Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1761/Male/m/1761_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/105062m.mp4"
        },
        {
            name: "Side Lateral Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/373/Male/m/373_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41051m.mp4"
        },
        {
            name: "Barbell Shoulder Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/308/Male/m/308_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/52000/53841m.mp4"
        },
        {
            name: "Front Plate Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/230/Male/m/230_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/39931m.mp4"
        },
        {
            name: "Barbell Front Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/3741/Male/m/3741_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/118000/118461m.mp4"
        },
        {
            name: "Handstand Push-Ups",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/227/Male/m/227_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/62000/62702m.mp4"
        },
        {
            name: "Dumbbell Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/327/Male/m/327_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/54000/54021m.mp4"
        },
        {
            name: "Iron Cross",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/195/Male/m/195_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/54000/54161m.mp4"
        },
        {
            name: "Seated Side Lateral Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/378/Male/m/378_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40911m.mp4"
        },
        {
            name: "Lying Rear Delt Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/376/Male/m/376_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41591m.mp4"
        },
        {
            name: "Dumbbell Scaption",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1341/Male/m/1341_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/98000/99862m.mp4"
        },
        {
            name: "Arm Circles",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/497/Male/m/497_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38171m.mp4"
        },
        {
            name: "Cuban Press",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/199/Male/m/199_4.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/52000/53941m.mp4"
        },
        {
            name: "See-Saw",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/197/Male/m/197_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40971m.mp4"
        },
        {
            name: "Elbow Circles",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/498/Male/m/498_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/58000/59832m.mp4"
        }
    ];

    //Create the Traps controller
    app.controller('Traps', function () {
        this.products = listOfExercises_traps;
    });

    //List of exercises
    var listOfExercises_traps = [
        {
            name: "Smith Machine Shrug",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/134/Male/m/134_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41251m.mp4"
        },
        {
            name: "Leverage Shrug",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/898/Male/m/898_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/90000/90922m.mp4"
        },
        {
            name: "Dumbbell Shrug",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/96/Male/m/96_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/39141m.mp4"
        },
        {
            name: "Barbell Shrug",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/97/Male/m/97_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38331m.mp4"
        },
        {
            name: "Upright Cable Row",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/71/Male/m/71_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41701m.mp4"
        },
        {
            name: "Cable Shrugs",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/133/Male/m/133_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38711m.mp4"
        },
        {
            name: "Clean Shrug",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/673/Male/m/673_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/76000/76812m.mp4"
        },
        {
            name: "Snatch Shrug",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/718/Male/m/718_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/76000/77842m.mp4"
        },
        {
            name: "Scapular Pull-Up",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1451/Male/m/1451_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/100000/100302m.mp4"
        }
    ];

    //Create the Glutes controller
    app.controller('Glutes', function () {
        this.products = listOfExercises_glutes;
    });

    //List of exercises
    var listOfExercises_glutes = [
        {
            name: "Barbell Glute Bridge",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/662/Male/m/662_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/76000/76652m.mp4"
        },
        {
            name: "Barbell Hip Thrust",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/661/Male/m/661_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/76000/76632m.mp4"
        },
        {
            name: "Butt Lift (Bridge)",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/99/Male/m/99_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38531m.mp4"
        },
        {
            name: "Kneeling Squat",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/697/Male/m/697_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/78000/78132m.mp4"
        },
        {
            name: "Single Leg Glute Bridge",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/915/Male/m/915_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/94000/94732m.mp4"
        },
        {
            name: "Step-Up With Knee Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/2251/Male/m/2251_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/106000/107052m.mp4"
        },
        {
            name: "Flutter Kicks",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/267/Male/m/267_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/39291m.mp4"
        },
        {
            name: "Glute Kickback",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/98/Male/m/98_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/54000/54121m.mp4"
        },
        {
            name: "Kneeling Jump Squat",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/749/Male/m/749_4.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/76000/76872m.mp4"
        },
        {
            name: "Leg Lift",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/100/Male/m/100_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40561m.mp4"
        },
        {
            name: "Physioball Hip Bridge",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1111/Male/m/1111_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/98000/99262m.mp4"
        }
    ];

    //Create the Quadriceps controller
    app.controller('Quadriceps', function () {
        this.products = listOfExercises_quadriceps;
    });

    //List of exercises
    var listOfExercises_quadriceps = [
            {
                name: "Barbell Walking Lunge",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/2241/Male/m/2241_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/106000/107032m.mp4"
            },
            {
                name: "Clean From Blocks",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/746/Male/m/746_4.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/76000/76952m.mp4"
            },
            {
                name: "Barbell Full Squat",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/64/Male/m/64_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/52000/53801m.mp4"
            },
            {
                name: "Hang Clean",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/688/Male/m/688_4.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/76000/77532m.mp4"
            },
            {
                name: "Snatch",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/187/Male/m/187_4.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/76000/77922m.mp4"
            },
            {
                name: "Single Leg Push-Off",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/818/Male/m/818_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/90000/91732m.mp4"
            },
            {
                name: "Box Squat",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/665/Male/m/665_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/76000/76682m.mp4"
            },
            {
                name: "Kettlebell Pistol Squat",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/521/Male/m/521_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/62000/63032m.mp4"
            },
            {
                name: "Olympic Squat",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/700/Male/m/700_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/78000/78242m.mp4"
            },
            {
                name: "Dumbbell Squat",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/85/Male/m/85_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/38000/39161m.mp4"
            },
            {
                name: "Dumbbell Rear Lunge",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/109/Male/m/109_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/38000/39111m.mp4"
            },
            {
                name: "Trap Bar Deadlift",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/921/Male/m/921_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/90000/91072m.mp4"
            },
            {
                name: "Bear Crawl Sled Drags",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/730/Male/m/730_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/76000/77272m.mp4"
            },
            {
                name: "Double Leg Butt Kick",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/778/Male/m/778_3.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/94000/94832m.mp4"
            },
            {
                name: "Weighted Jump Squat",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/887/Male/m/887_3.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/98000/99802m.mp4"
            },
            {
                name: "Dumbbell Lunges",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/32/Male/m/32_2.jpg",
                video: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/32/Male/m/32_2.jpg"
            },
            {
                name: "Barbell Lunge",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/41/Male/m/41_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/38000/38291m.mp4"
            },
            {
                name: "Goblet Squat",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/590/Male/m/590_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/62000/63912m.mp4"
            },
            {
                name: "Narrow Stance Squats",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/269/Male/m/269_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/54000/54271m.mp4"
            },
            {
                name: "Bodyweight Squat",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/855/Male/m/855_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/90000/90572m.mp4"
            },
            {
                name: "One Leg Barbell Squat",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/111/Male/m/111_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/40000/41241m.mp4"
            },
            {
                name: "Barbell Step Ups",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/62/Male/m/62_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/52000/53861m.mp4"
            },
            {
                name: "Dumbbell Goblet Squat",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/3711/Male/m/3711_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/118000/119391m.mp4"
            },
            {
                name: "Leg Extensions",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/53/Male/m/53_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/40000/40541m.mp4"
            },
            {
                name: "Barbell Hack Squat",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/84/Male/m/84_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/52000/53811m.mp4"
            },
            {
                name: "Wide Stance Barbell Squat",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/44/Male/m/44_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/54000/54591m.mp4"
            },
            {
                name: "Dumbbell Step Ups",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/63/Male/m/63_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/38000/39171m.mp4"
            },
            {
                name: "Overhead Squat",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/248/Male/m/248_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/78000/78262m.mp4"
            },
            {
                name: "Pistol Squat",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/3481/Male/m/3481_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/116000/117851m.mp4"
            },
            {
                name: "Sled Push",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/714/Male/m/714_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/94000/95811m.mp4"
            },
            {
                name: "Rear Leg Raises",
                image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/634/Male/m/634_2.jpg",
                video: "http://videocdn.bodybuilding.com/video/mp4/60000/60382m.mp4"
            }
    ];

    //Create the Hamstrings controller
    app.controller('Hamstrings', function () {
        this.products = listOfExercises_hamstrings;
    });

    //List of exercises
    var listOfExercises_hamstrings = [
        {
            name: "Snatch Deadlift",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/716/Male/m/716_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/76000/77882m.mp4"
        },
        {
            name: "Clean Deadlift",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/671/Male/m/671_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/76000/76772m.mp4"
        },
        {
            name: "Hang Snatch",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/690/Male/m/690_4.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/76000/77602m.mp4"
        },
        {
            name: "Lunge Pass Through",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1851/Male/m/1851_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/104332m.mp4"
        },
        {
            name: "Barbell Deadlift",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/3831/Male/m/3831_4.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/118000/118911m.mp4"
        },
        {
            name: "Sumo Deadlift",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/722/Male/m/722_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/80000/80802m.mp4"
        },
        {
            name: "Power Snatch",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/703/Male/m/703_4.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/78000/78342m.mp4"
        },
        {
            name: "Front Leg Raises",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/589/Male/m/589_1.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/58000/59882m.mp4"
        },
        {
            name: "Power Clean",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/185/Male/m/185_4.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/98000/99822m.mp4"
        },
        {
            name: "Inchworm",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/881/Male/m/881_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/94000/94172m.mp4"
        },
        {
            name: "Ball Leg Curl",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/861/Male/m/861_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/92000/93962m.mp4"
        },
        {
            name: "Front Box Jump",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/782/Male/m/782_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/98000/99542m.mp4"
        },
        {
            name: "Single Leg Deadlift",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/2783/Male/m/2783_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/116000/116452m.mp4"
        },
        {
            name: "Good Morning",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/686/Male/m/686_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/76000/77442m.mp4"
        },
        {
            name: "Standing Toe Touches",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/494/Male/m/494_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/60000/60832m.mp4"
        },
        {
            name: "90/90 Hamstring",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/578/Male/m/578_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/58000/59582m.mp4"
        },
        {
            name: "The Straddle",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/418/Male/m/418_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/60000/60892m.mp4"
        },
        {
            name: "Runner's Stretch",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/436/Male/m/436_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/60000/60402m.mp4"
        }
    ];

    //Create the Calves controller
    app.controller('Calves', function () {
        this.products = listOfExercises_calves;
    });

    //List of exercises
    var listOfExercises_calves = [
        {
            name: "Smith Machine Calf Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1841/Male/m/1841_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/104000/104362m.mp4"
        },
        {
            name: "Standing Calf Raises",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/48/Male/m/48_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41821m.mp4"
        },
        {
            name: "Standing Dumbbell Calf Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/219/Male/m/219_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41841m.mp4"
        },
        {
            name: "Standing Barbell Calf Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/218/Male/m/218_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/41691m.mp4"
        },
        {
            name: "Barbell Seated Calf Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/176/Male/m/176_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38311m.mp4"
        },
        {
            name: "Seated Calf Stretch",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/404/Male/m/404_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/60000/60432m.mp4"
        },
        {
            name: "Ankle Circles",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/501/Male/m/501_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38161m.mp4"
        },
        {
            name: "Seated Calf Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/152/Male/m/152_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40201m.mp4"
        },
        {
            name: "Knee Circles",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/264/Male/m/264_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/40000/40461m.mp4"
        },
        {
            name: "Calf Raise On A Dumbbell",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/242/Male/m/242_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38741m.mp4"
        },
        {
            name: "Dumbbell Seated One-Leg Calf Raise",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/175/Male/m/175_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/39121m.mp4"
        },
        {
            name: "Calf Stretch Hands Against Wall",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/480/Male/m/480_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/58000/59662m.mp4"
        },
        {
            name: "Calf Stretch Elbows Against Wall",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/479/Male/m/479_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/58000/59652m.mp4"
        },
        {
            name: "Calf Press On The Leg Press Machine",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/215/Male/m/215_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/38000/38731m.mp4"
        }
    ];

    //Create the Cardio controller
    app.controller('Cardio', function () {
        this.products = listOfExercises_cardio;
    });

    //List of exercises
    var listOfExercises_cardio = [
        {
            name: "Bicycling",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/646/Male/m/646_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/70000/71742m.mp4"
        },
        {
            name: "Bicycling - Stationary",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/647/Male/m/647_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/70000/71762m.mp4"
        },
        {
            name: "Burpee",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/3153/Male/m/3153_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/118000/118171m.mp4"
        },
        {
            name: "Butt Kicks",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/3143/Male/m/3143_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/118000/118181m.mp4"
        },
        {
            name: "Elliptical Trainer",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/648/Male/m/648_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/70000/71772m.mp4"
        },
        {
            name: "Jog In Place",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/2963/Male/m/2963_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/118000/118271m.mp4"
        },
        {
            name: "Jogging - Treadmill",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/649/Male/m/649_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/70000/71792m.mp4"
        },
        {
            name: "High Knee Jog",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/3183/Male/m/3183_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/118000/118141m.mp4"
        },
        {
            name: "Prowler Sprint",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/1331/Male/m/1331_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/98000/99312m.mp4"
        },
        {
            name: "Recruitment Bike",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/650/Male/m/650_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/70000/71812m.mp4"
        },
        {
            name: "Rope Jumping",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/651/Male/m/651_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/70000/71832m.mp4"
        },
        {
            name: "Running - Treadmill",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/653/Male/m/653_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/70000/71872m.mp4"
        },
        {
            name: "Skating",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/654/Male/m/654_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/72000/72312m.mp4"
        },
        {
            name: "Stairmaster",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/655/Male/m/655_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/70000/71892m.mp4"
        },
        {
            name: "Step Mill",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/656/Male/m/656_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/70000/71912m.mp4"
        },
        {
            name: "Trail Running/Walking",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/657/Male/m/657_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/72000/72402m.mp4"
        },
        {
            name: "Walking High Knees",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/3053/Male/m/3053_3.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/118000/118381m.mp4"
        },
        {
            name: "Walking - Treadmill",
            image: "http://www.bodybuilding.com/exercises/exerciseImages/sequences/658/Male/m/658_2.jpg",
            video: "http://videocdn.bodybuilding.com/video/mp4/70000/71942m.mp4"
        }
    ];
})();