import java.io.*;

public class SerializeObjects {

	public static void writeObject(Object obj, String fileName)
			throws IOException, FileNotFoundException {
		try {
			File f = new File(fileName);
			FileOutputStream fileOut = new FileOutputStream(f);
			ObjectOutputStream out = new ObjectOutputStream(fileOut);
			out.writeObject(obj);
			out.flush();
			out.close();
		} catch (FileNotFoundException fnfe) {
			fnfe.printStackTrace();
			throw fnfe;
		} catch (IOException ioe) {
			ioe.printStackTrace();
			throw ioe;
		}
	}

	public static Object readObject(String fileName) throws IOException,
			ClassNotFoundException, FileNotFoundException {
		Object obj = null;
		try {
			File f = new File(fileName);
			FileInputStream fileIn = new FileInputStream(f);
			ObjectInputStream in = new ObjectInputStream(fileIn);
			obj = in.readObject();
			in.close();
		} catch (ClassNotFoundException fnfe) {
			fnfe.printStackTrace();
			throw fnfe;
		} catch (IOException ioe) {
			ioe.printStackTrace();
			throw ioe;
		}
		return obj;
	}

}
