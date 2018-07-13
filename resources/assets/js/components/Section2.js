import React, { Component } from '../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react';
import ReactDOM from '../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react-dom';

export default class Section2 extends Component {
    render() {
        return (
            <section class="section section-dark">
                <h2>Our Purpose</h2>
                <p>Cork Board is an easy to use dynamic web application that allows you to create and bookmark a unique board space and invite
                    anyone to read and post to your board. On your board, you can bookmark, tag, and search for your favorite links. You
                    can also add announcements to communicate with your board followers.</p>
                <p>It's our hope that through our app you can better pool resources with teammates, friends, and classmates as you work together.</p>
            </section>


        );
    }
}

if (document.getElementById('section2')) {
    ReactDOM.render(<Section2 />, document.getElementById('section2'));
}
