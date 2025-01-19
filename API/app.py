from flask import Flask, request, jsonify
import pandas as pd
import joblib
from flask_cors import CORS


app = Flask(__name__)
CORS(app)

# Load model yang sudah dilatih
model = joblib.load("knn_model_mobil_bekas.pkl")  # Path ke file .pkl model Anda

@app.route('/predict', methods=['POST'])
def predict():
    try:
        # Ambil data dari request JSON
        data = request.json
        
        # Konversi data menjadi DataFrame
        data_baru = pd.DataFrame([data])  # Pastikan input sesuai format DataFrame
        
        # Prediksi harga
        y_pred = model.predict(data_baru)
        
        # Kirim hasil prediksi
        return jsonify({"Prediksi Harga": float(y_pred[0])})
    except Exception as e:
        return jsonify({"error": str(e)}), 400

if __name__ == '__main__':
    app.run(debug=True)
