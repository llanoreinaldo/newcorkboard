export default {
    // Prevent page scrolling when modal is open.
    '@global': {
        'body': {
            overflow: 'hidden'
        },
    },

    // The modal wrapper: absolute positioning,
    // 100% of the browser window height and width.
    modalOverlay: {
        display: 'flex',
        alignItems: 'center',
        justifyContent: 'center',
        position: 'fixed',
        top: 0,
        right: 0,
        left: 0,
        bottom: 0,
        padding: '1rem',
        backgroundColor: 'white',
        zIndex: '9999',
        opacity: 1,
        overflowX: 'hidden',
        overflowY: 'auto',
        animation: 'show .5s ease',
    },

    // Fade-in open animation
    '@keyframes show': {
        '0%': {
            display: 'none',
            opacity: 0,
        },
        '1%': {
            display: 'flex',
            opacity: 0,
        },
        '100%': {
            opacity: 1,
        },
    },

    // The modal window: a empty div, vertical and horizontal cenetered.
    modal: {
        width: '100%',
        backgroundColor: 'white',
        boxShadow: [0, 0, '0.625rem', 'rgba(0, 0, 0, 0.2)'],

        '@media (min-width: 576px)': {
            width: '32rem',
        },
    },

    modalHeader: {
        padding: [2, 16],
        backgroundColor: "white",
        color: "white"
    },

    /* Modal Content */
    modalContent: {
        position: "relative",
        backgroundColor: "white",
        margin: "auto",
        padding: 0,
        border: [1, "solid", "#888"],
        width: "80%"
    },

    modalFooter: {
        padding: [2, 16],
        backgroundColor: "#5cb85c",
        color: "white"
    }

}