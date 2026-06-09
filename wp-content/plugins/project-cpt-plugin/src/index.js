import { registerBlockType } from "@wordpress/blocks";
import {
  TextControl,
  PanelBody
} from "@wordpress/components";

import {
  InspectorControls,
  useBlockProps
} from "@wordpress/block-editor";

registerBlockType("project/project-details", {

  attributes: {
    category: { type: "string" },
    location: { type: "string" },
    price: { type: "string" },
    status: { type: "string" },
  },

  edit({ attributes, setAttributes }) {

    return (
      <>
        <InspectorControls>
          <PanelBody title="Project Settings">

            <TextControl
              label="Category"
              value={attributes.category}
              onChange={(value) =>
                setAttributes({ category: value })
              }
            />

            <TextControl
              label="Location"
              value={attributes.location}
              onChange={(value) =>
                setAttributes({ location: value })
              }
            />

            <TextControl
              label="Price"
              value={attributes.price}
              onChange={(value) =>
                setAttributes({ price: value })
              }
            />

            <TextControl
              label="Status"
              value={attributes.status}
              onChange={(value) =>
                setAttributes({ status: value })
              }
            />

          </PanelBody>
        </InspectorControls>

        <div {...useBlockProps()}>
          <h3>Project Details Block</h3>

          <p>Category: {attributes.category}</p>
          <p>Location: {attributes.location}</p>
          <p>Price: {attributes.price}</p>
          <p>Status: {attributes.status}</p>
        </div>
      </>
    );
  },

  save({ attributes }) {

    return (
      <div>
        <p>{attributes.category}</p>
        <p>{attributes.location}</p>
        <p>{attributes.price}</p>
        <p>{attributes.status}</p>
      </div>
    );
  },
});