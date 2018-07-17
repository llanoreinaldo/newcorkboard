import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Cards extends Component {
    render() {
        return (

            // <!--CARDS-->
            <div class="main">
                <div class="cardWrapper col-lg-12 col-md-8">
                    {/* {{#if board:links}} */}
                <ul>
                        {/* {{#each board:links}} */}
                <div class="card">
                            <div class="card-body">
                                <br></br>
                                <div class="row">
                                    <h5 id="cardTitleLinkNum{{id}}" class="col-lg-8 col-md-8 col-sm-8 title">
                                        {{ title }}
                                    </h5>
                                    <div class="col-lg-8" id="url">
                                        <a href="{{url}}" target="_blank" id="cardUrlLinkNum{{id}}">{{ url }}</a>
                                    </div>
                                </div>

                                <br></br>
                                <div class="row">
                                    <div class="col-lg-8 col-md-6 col-sm-6">
                                        <p class="card-text cardDescription" id="cardDescLinkNum{{id}}">
                                            {{ description }}</p>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <p>
                                            {/* {{#if image_url}} */}
                            <img id="cardImgLinkNum{{id}}" class="card-img-top cardImg" src="{{image_url}}"> {/*{{/if}}*/}</img>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row bottomsec">
                                <div class="col-lg-12 col-sm-12">
                                    <div class="card-header">
                                        <small class="text-muted">
                                            <div class="cardIcons">
                                                <button>
                                                    <i class="fas fa-pencil-alt cardEdit" data-toggle="modal" data-target="#editModal" data-linkId="{{id}}"></i>
                                                    <i class="fas fa-trash-alt cardDelete" data-toggle="modal" data-target="#deleteModal" data-linkId="{{id}}"></i>
                                                </button>
                                            </div>
                                            <div class="tagsId tags{{id}}">
                                                <h4 style={{float: left}}>Tags:</h4> {/*{{#each Tags}}*/} |
                                    <a href="/boards/{{../../board.id}}/tags/{{id}}" data-tagId={{ id }}>{{ name }}</a>
                                                {/* {{/ each}} */}
                                </div>
                                        </small>
                                    </div>

                                </div>
                            </div>
                        </div>
                        {/* {{/ each}} */}
        </ul>
                    {/* {{/if}} */}
    </div>
            </div>

        );
    }
}

if (document.getElementById('cards')) {
    ReactDOM.render(<Cards />, document.getElementById('cards'));
}