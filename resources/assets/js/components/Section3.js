import React, { Component } from '../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react';
import ReactDOM from '../../../../../../../../../../AppData/Local/Microsoft/TypeScript/2.9/node_modules/@types/react-dom';

export default class Section3 extends Component {
    render() {
        return (
            <section className="section section-dark">
                <h2>Contact Us</h2>
                <a href="mailto:corkboard062018@gmail.com?subject=Cork%20Board&" target="_top">
                    <i class="fas fa-envelope"></i>
                </a>
                <br></br>
                    <p>bAll Rights Reserved. © Cork Board 2018</p>
            </section>
                );
            }
        }
        
if (document.getElementById('section3')) {
                    ReactDOM.render(<Section3 />, document.getElementById('section3'));
                }
