/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./*.php", // Các file PHP trong root
        "./**/*.php", // Tất cả các file PHP trong subfolders
        "./assets/**/*.js", // Chỉ các file JS trong thư mục assets (hoặc thư mục khác nếu có)
        "./templates/**/*.php", // Nếu bạn có thư mục templates chứa các file PHP
    ],
    theme: {
        container: {
            center: true,
            padding: {
                DEFAULT: "1rem",
                sm: "2rem",
                lg: "4rem",
                xl: "5rem",
                "2xl": "6rem",
            },
            screens: {
                sm: "640px",
                md: "768px",
                lg: "1024px",
                xl: "1280px",
                "2xl": "1344px", // Kích thước lớn nhất của container
            },
        },
        extend: {
            fontFamily: {
                sans: ["Montserrat", "sans-serif"], // Thay Inter bằng Montserrat
            },
            fontSize: {
                h1: ["40px", { lineHeight: "150%" }],
                h2: ["32px", { lineHeight: "150%" }],
                h3: ["28px", { lineHeight: "150%" }],
                h4: ["22px", { lineHeight: "150%" }],
                h5: ["18px", { lineHeight: "150%" }],
                h6: ["16px", { lineHeight: "150%" }],
                h7: ["14px", { lineHeight: "150%" }],
                "body-16": ["16px", { lineHeight: "150%" }],
                "body-main": ["14px", { lineHeight: "150%" }],
                "body-18": ["18px", { lineHeight: "150%" }],
                "body-20": ["20px", { lineHeight: "150%" }],
            },
            colors: {
                primary: "#FF9900", // Orange
                cusgray: "#4D4D4D", // Medium gray
                black: "#000000", // Black
                "neu-0": "#FFFFFF", // White
                "neu-1": "#F5F5F5", // Very light gray
                "neu-2": "#E0E0E0", // Light gray
                "neu-3": "#BDBDBD", // Medium gray
                "neu-4": "#9E9E9E", // Dark gray
                "neu-5": "#757575", // Very dark gray
                "neu-6": "#212121", // Nearly black
                white: "#FFFFFF", // White (same as neu-0)
            },
            boxShadow: {
                "custom-1": "0px 2px 6px 0px rgba(20, 20, 43, 0.06)",
                "custom-2": "0px 1px 4px 0px rgba(0, 0, 0, 0.09)",
            },
        },
    },
    plugins: [],
};